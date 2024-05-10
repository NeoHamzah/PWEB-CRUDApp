<?php

include_once 'config/conn.php';

class User {
    static function login($data=[]) {
        extract($data);
        global $conn;

        $result = $conn->query("SELECT * FROM users WHERE username = '$username'");
        if ($result = $result->fetch_assoc()) {
            $hashedPassword = $result['password'];
            $verify = password_verify($password, $hashedPassword);
            if ($verify) { return $result; }
            else { return false; }
        }
        else { return false; }
    }

    static function register($data=[]) {
        extract($data);
        global $conn;
        
        $nama_lengkap = strtolower($nama_lengkap);
        $username = strtolower($username);
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users SET username = ?, nama_lengkap = ?, password = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('sss', $username, $nama_lengkap, $hashedPassword);
        $stmt->execute();

        $result = $stmt->affected_rows > 0 ? true : false;
        return $result;
    }

    static function getPassword($username) { 
        global $conn;
        $sql = "SELECT password FROM users WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('s', $username);
        $stmt->execute();

        $result = $stmt->affected_rows > 0 ? true : false;
        return $result;
    }

    static function update($data=[]) {}

    static function delete($id='') {}
}