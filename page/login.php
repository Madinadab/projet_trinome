<?php
session_start();
if (
    isset($_POST['mail']) &&
    isset($_POST['pass'])
) {

    include "bd.php";

    $email = $_POST['mail'];
    $pass = $_POST['pass'];

    $data = "mail=" . $mail;

    if (empty($mail)) {
        $em = "email is required";
        header("Location: index.php?error=$em&$data");
        exit;
    } else if (empty($pass)) {
        $em = "pass is required";
        header("Location: index.php?error=$em&$data");
        exit;
    } else {

        $sql = "SELECT * FROM user where mail = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$email]);

        if ($stmt->rowCount() == 1) {
            $user = $stmt->fetch();

            $username = $user['mail'];
            $password = $user['pass'];
            $fname = $user['fname'];
            $id = $user['id'];
            if ($username === $email) {
                if (password_verify($pass, $password)) {
                    $_SESSION['id'] = $id;
                    $_SESSION['fname'] = $fname;

                    header("Location: admistrateur.php");
                    exit;
                }
            } else {
                $em = "Incorect User name or password";
                header("Location: admistrateur.php?error=$em&$data");
                exit;
            }
        } else {
            $em = "Incorect User name or password";
            header("Location: admistrateur.php?error=$em&$data");
            exit;
        }
    }
} else {
    header("Location: admistrateur.php?error=error");
    exit;
}
