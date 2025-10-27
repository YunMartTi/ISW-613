<?php

/**
 *  Gets a new mysql connection
 */
function getConnection()
{
  $connection = new mysqli('localhost', 'root', '', 'workshop5');
  if ($connection->connect_errno) {
    printf("Connect failed: %s\n", $connection->connect_error);
    die;
  }
  return $connection;
}


function sendScheduleEmail($recipient, $subject)
{

  $output = '';
  $retval = '';
  exec("/home/ubuntu/user/example2.php $recipient $subject", $output, $retval);


  var_dump($output);
}

/**
 * Inserts a new student to the database
 *
 * @student An associative array with the student information
 */
function saveStudent($student)
{
  $conn = getConnection();
  $sql = "INSERT INTO students (`full_name`, `email`, `document`, `user`, `password`, `status`, `last_login_datetime`)
          VALUES (?, ?, ?, ?, ?, ?, ?)";

  // Preparar statement seguro (previene inyección SQL)
  $stmt = $conn->prepare($sql);
  $status = 'Active';
  $lastLogin = null; // si no hay login todavía
  $stmt->bind_param(
    "sssssss",
    $student['full_name'],
    $student['email'],
    $student['document'],
    $student['user'],
    $student['password'],
    $status,
    $lastLogin
  );

  $result = $stmt->execute();

  $stmt->close();
  $conn->close();

  return $result;
}

function modifyStudent($student)
{
  $conn = getConnection();
  $sql = "UPDATE students SET status WHERE username INTO students( `full_name`, `email`, `document`, `status`, `last_login_datetime`)
          VALUES ('{$student['full_name']}', '{$student['email']}', '', 'Active', '')";
  $conn->query($sql);

  if ($conn->connect_errno) {
    $conn->close();
    return false;
  }
  $conn->close();
  return true;
}


/**
 * Get all students from the database
 *
 */
function getStudents()
{
  $conn = getConnection();
  $sql = "SELECT * FROM students";
  $result = $conn->query($sql);

  if ($conn->connect_errno) {
    $conn->close();
    return [];
  }
  $conn->close();
  return $result;
}

/**
 * Get one specific student from the database
 *
 * @id Id of the student
 */
function authenticate($username, $password)
{
  $conn = getConnection();
  $sql = "SELECT * FROM students WHERE `user` = '$username' AND `password` = '$password'";
  $result = $conn->query($sql);

  if ($conn->connect_errno) {
    $conn->close();
    return false;
  }
  $conn->close();
  return $result->fetch_array();
}

/**
 * Deletes an student from the database
 */
function deleteStudent($id)
{
  $conn = getConnection();
  $sql = "DELETE FROM students WHERE id = $id";
  $result = $conn->query($sql);

  if ($conn->connect_errno) {
    $conn->close();
    return false;
  }
  $conn->close();
  return true;
}
