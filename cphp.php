<?php


define("def","Default value");

    if (isset($_POST['add'])) {
        extract($_POST);

        $ad=$num1+$num2;
        echo "<table border=1 cellspacing=2 cellpadding=2>";
          echo "<tr>";
            echo "<td>";
              echo "Sum of $num1 and $num2:-  ";
            echo "</td>";
            echo "<td>";
              echo $ad;
            echo "</td>";
          echo "</tr>";
        echo "</table>";
        if($ad%2==0)
          {
            echo "<table border=1 cellspacing=2 cellpadding=2>";
              echo "<tr>";
                echo "<td>";
                  echo "Even/Odd:-  ";
                echo "</td>";
                echo "<td>";
                  echo "Even";
                echo "</td>";
              echo "</tr>";
            echo "</table>";
            $sm=0;
            while ($ad > 0)
              {
                  $digit = $ad % 10;
                  $sm  = $sm + $digit;
                  $ad = $ad/10;
              }
                echo "<table border=1 cellspacing=2 cellpadding=2>";
                  echo "<tr>";
                    echo "<td>";
                      echo "Sum of digits:-  ";
                    echo "</td>";
                    echo "<td>";
                      echo $sm;
                    echo "</td>";
                  echo "</tr>";
                echo "</table>";
              }
              else {
                echo "<table border=1 cellspacing=2 cellpadding=2>";
                echo "<tr>";
                  echo "<td>";
                    echo "Even/Odd:-  ";
                  echo "</td>";
                  echo "<td>";
                    echo "Odd";
                  echo "</td>";
                echo "</tr>";
                  echo "<tr>";
 		echo "<td>";
		echo "Sum of cube of digits:- ";
                    echo "</td>";
                    echo "<td>";
                      $c=0;
			$tl=$ad;
                        while($tl>0)
     			{
				$a=$tl%10;
      				$cube=$a*$a*$a;
       				$c=$c+$cube;
       				$tl=$tl/10;
     			}
		echo $c;
                    echo "</td>";
                  echo "</tr>";
 		echo "<tr>";
                  echo "<td>";
                     if ($c==$ad)
			{
echo "It is an Armstrong number.";
}
else {
echo "It is not an Armstrong number. ";
}
                  echo "</td>";
                echo "</tr>";
                echo "</table>";
              }

    }
    elseif (isset($_POST['sub'])) {
        extract($_POST);

        $sb=$num1-$num2;
        echo "<table border=1 cellspacing=2 cellpadding=2>";
          echo "<tr>";
            echo "<td>";
              echo "Difference of $num1 and $num2:-  ";
            echo "</td>";
            echo "<td>";
              echo $sb;
            echo "</td>";
          echo "</tr>";
          echo "<tr>";
            echo "<td>";
            function subr(&$m)
              {
                $m="You got total ".$m;
              }
            $txt=$sb;
            subr($txt);
            echo $txt;
            echo "</td>";
          echo "</tr>";
        echo "</table>";
	

    }



?>
<body>
<a href="index.html"><input type="button" value="HOME"></a>
</body>
