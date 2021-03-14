<?php 
    if(isset($_POST['signup'])){
        if( empty($_POST['id']) || empty($_POST['password']) || empty($_POST['repass']) || empty($_POST['name']) || empty($_POST['type'])){
            echo"Plaese fill out all the field";
        }
        else{
          

            if ($temp_id[0]>0) {
                 
            }
            else{

                $id= $_POST['id'];
                $password=$_POST['password'];
                $repass=$_POST['repass'];
                $name = $_POST['name'];
                $type=$_POST['type'];

                $user=['id'=> $id, 'password'=> $password, 'name' => $name, 'type' => $type ];
				

                if ($password!=$repass) {
                    echo "Passwords does not match!";
                }
                else{
                    if(filesize('data.json')==0){
                        $json=json_encode($user);
                        $myfile=fopen('data.json', 'w');
                        fwrite($myfile, '['.$json.']');
                    }
                    else{
                        $inp = file_get_contents('data.json');
                        $tempArray = json_decode($inp);
						 
                        array_push($tempArray, $user);
                        $jsonData = json_encode($tempArray);
                        file_put_contents('data.json', $jsonData);
                    }
                    header('location: login.php');
                }

            }

            
        }
    }

?>