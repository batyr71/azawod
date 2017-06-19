<?php
include 'Reestr.php';
$reestr = new Reeestr();

if(isset($_POST))
{
    $search = $_POST[search];
   
    $boy = $_POST[sex][0];
    $girl = $_POST[sex][1];
    $ages = intval($_POST[ages]);
    $agepo = intval($_POST[agepo]);
    $output = '<table>
                        <tr>
                                <th>№ id</th>
                                <th>Фото</th>
                                <th>ФИО</th>
                                <th>Возраст</th>
                                <th>Пол</th>
                                <th>Действие</th>
                        </tr>';
    
    $sql = "SELECT * FROM staff WHERE  (firstname LIKE '%$search%' OR lastname LIKE '%$search%' OR middlename LIKE '%$search%') AND ((sex LIKE '%$girl%' OR sex LIKE '%$boy%') AND (sex LIKE '%$girl%' AND  sex LIKE '%$boy%') ) OR (birthday BETWEEN DATE_SUB(NOW(), INTERVAL $agepo YEAR) AND DATE_SUB(NOW(),INTERVAL $ages YEAR))"; 

    
    $query = mysqli_query($reestr->connect, $sql);
    $rowcount = mysqli_num_rows($query);
    if($rowcount == 0)
    {
        $output = 'Нет такой буквы в этом слове';
    } else 
    {
        while ($row = mysqli_fetch_array($query))
        {
            $id = $row['id'];
            $image = $row['image'];
            $fio = $row['lastname']." ".$row['firstname']." ".$row['middlename'];
            $day = new DateTime($row['birthday']);
            $today = new DateTime('today');
            $gender = $row['sex'];
            $age = $today->diff($day);
            
            $output .=  
            
            '
                        <tr>
                                <td>'.$id.'</td>
                                <td><img src="/images/'.$image.'"></td>
                                <td>'.$fio.'</td>
                                <td>'.$age->y.'</td>
                                <td id="gender">'.$gender.'</td>
                                <td><a href="">Ред.</a> <a href="">Уд.</a></td>
                        </tr>
                '
            ;
            
            
        }
    }
}
     
$output .= '</table>';   
echo $output;