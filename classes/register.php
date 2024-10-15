<?php

class Signup {
    private $error = "";

    public function evaluate($data) {
        foreach ($data as $key => $value) {
            if (empty($value)) {
                $this->error .= "$key is empty!<br>";
            }

            if ($key == "email") {
                if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $value)) {
                    $this->error .= "Invalid email address!<br>";
                }
            }

            if ($key == "fullname") {
                if (is_numeric($value)) {
                    $this->error .= "Full name can't be a number!<br>";
                }
                if (strstr($value, " ")) {
                    $this->error .= "Full name can't have spaces!<br>";
                }
            }

            if ($key == "username") {
                if (is_numeric($value)) {
                    $this->error .= "Username can't be a number!<br>";
                }
                if (strstr($value, " ")) {
                    $this->error .= "Username can't have spaces!<br>";
                }
            }
        }

        if ($this->error == "") {
            return $this->create_user($data);
        } else {
            return $this->error;
        }
    }

    public function create_user($data) {
        $fullname = ucfirst($data['fullname']);
        $username = ucfirst($data['username']);
        $email = $data['email'];
        $gender = $data['gender'];
        $password = password_hash($data['pass'], PASSWORD_BCRYPT); // Hash the password
        $cpassword = password_hash($data['cpass'], PASSWORD_BCRYPT); // Hash the confirmation password

        $url_address = strtolower($fullname) . "." . strtolower($username);
        $userid = $this->create_userid();

        $query = "INSERT INTO users (fullname, username, email, password, cpassword, gender) VALUES (?, ?, ?, ?, ?, ?)";
        $params = [$fullname, $username, $email, $password, $cpassword, $gender];
        $types = 'ssssss';

        $DB = new Database();
        return $DB->save($query, $params, $types);
    }

    private function create_userid() {
        $length = rand(4, 19);
        $number = "";
        for ($i = 0; $i < $length; $i++) {
            $new_rand = rand(0, 9);
            $number .= $new_rand;
        }
        return $number;
    }
}

?>
