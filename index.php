<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<?php
  function printArrayValuesAsTableRow(array $a)
  {
    foreach($a as $key => $value)
    {
      echo("<td name='" . $key . "'>" . $value . "</td>\n");
    }
  }
  function printPeopleArrayAsTableContents(array $a)
  {
    foreach($a as $value)
    {
      echo("<tr>\n");
      printArrayValuesAsTableRow($value);
      echo("<td><button onclick=\"alert('Name: " . $value["first_name"] . " " . $value["last_name"] . "\nEmail: " . $value["email"] . "');\">Alert</button></td>\n");
      echo("</tr>\n");
    }
  }
  
  $people = array(
    array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
    array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
    array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
    array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
    array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
  );
?>

<head>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<body>
  <main>
    <table>
      <thead>
        <td>ID</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Email</td>
        <td>Button</td>
      </thead>
      <tbody>
        <?php
          printPeopleArrayAsTableContents($people)
        ?>
      </tbody>
    </table>
  </main>
</body>
