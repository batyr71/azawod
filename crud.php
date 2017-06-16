<?php

class Crud 
{
    public $connect;
    private $host = 'localhost';
    private $username = 'y92573p9_root';
    private $password = '123456';
    private $database = 'y92573p9_root';

    public function __construct()
    {
        $this->database_connect();
    } 

    public function database_connect()
    {
        $this->connect = mysqli_connect($this->host, $this->username, $this->password, $this->database);
    }
    
    public function execute_query($query)
    {
        return mysqli_query($this->connect, $query);
    }
    
    public function get_data_in_table($query)
    {
        $output = '';
        $result = $this->execute_query($query);
        $output .= '
            <table>
                    <tr>
                            <th>№ id</th>
                            <th>Фото</th>
                            <th>ФИО</th>
                            <th>Возраст</th>
                            <th>Пол</th>
                            <th>Действие</th>
                    </tr>';
         while($row = mysqli_fetch_object($result))
         {
             $output .= ' 
                <tr>
                    <td>'.$row->id.'</td>
                    <td><img src="images/'.$row->image.'"></td>
                    <td id="fio">'.$row->firstname." ".$row->lastname." ".$row->middlename.'</td>  
                    <td>'.floor((time() - strtotime($row->birthday))/31556926).'</td> 
                    <td>'.$row->sex.'</td>
                    <td><a href="" id="upd'.$row->id.'">Ред.</a>   <a href="" id="del'.$row->id.' class="delete" >Удал.</a>  </td>
                </tr>
                ';
         }
         
         $output .= '</table>';
         return $output;
          
    }
    
    function upload_file($file)
    {
        
   
        if(isset($file))
        {
            $extension = explode(".", $file["name"]);
            $new_name = rand().".".$extension[1];
            $destination = './images/'.$new_name;
            move_uploaded_file($file['tmp_name'], $destination);
            return $new_name;
        }
     }
     
}