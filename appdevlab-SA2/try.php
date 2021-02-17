<?php 



  $s = 'var';
  function f() {
      function f2() {
          echo 'hello';
      }
  }
  f();
  f2();
?>