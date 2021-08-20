<?php
         include("db_connect.php");
         $sort = "";
         if(isset($_POST['rating']))
         {
             if($_POST['rating']== "highest"){
                 $sort = "ASC";
             }elseif($_POST['rating']== "highest"){
                $sort = "DESC";
             }
         }

         $datesort = "";
         if(isset($_POST['date']))
         {
             if($_POST['date']== "newest"){
                 $sort = "ASC";
             }elseif($_POST['date']== "oldest"){
                $sort = "DESC";
             }
         }

         $min = "";
         if(isset($_POST['mrating']))
         {
             if($_POST['mrating']== "1"){
                 $min = 1;
             }elseif($_POST['mrating']== "2"){
                $min = 2;
             }
            elseif($_POST['mrating']== "3"){
                $min = 3;
             }elseif($_POST['mrating']== "4"){
                $min = 4;
             }elseif($_POST['mrating']== "5"){
                $min = 5;
         }
        }

        $query="SELECT * FROM reviews WHERE $min <= list_rating ORDER BY list_rating $sort, list_reviewCreatedOnDate $datesort";

        $result=mysqli_query($conn,$query);

        echo "<table>";
        
        while($row=mysqli_fetch_object($result))
        {
            echo "<tr>";
            echo "<td>".$row->list_reviewFullText."</td>";
            echo "<td>".$row->list_reviewText."</td>";
            echo "<td>".$row->list_numLikes."</td>";
            echo "<td>".$row->list_numComments."</td>";
            echo "<td>".$row->list_numShares."</td>";
            echo "<td>".$row->list_rating."</td>";
            echo "<td>".$row->list_reviewCreatedOn."</td>";
            echo "<td>".$row->list_reviewCreatedOnDate."</td>";
            echo "</tr>";
        }
        
        
        echo "</table>";


    ?>