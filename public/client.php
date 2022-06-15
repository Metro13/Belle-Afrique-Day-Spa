<?php

    class client{

        //user registration

        public function registration($username, $fullname, $emailaddress, $contact, $password){
            $db = getdbConnection();          
            $stmt = $db->prepare("INSERT INTO client(username, fullname, email, contact, password) VALUES (:username, :fullname, :email, :contact, :password)");
            $stmt->bindParam("username", $username, PDO::PARAM_STR);
            $stmt->bindParam("fullname", $fullname, PDO::PARAM_STR);
            $stmt->bindParam("email", $emailaddress, PDO::PARAM_STR);
            $stmt->bindParam("contact", $contact, PDO::PARAM_STR);
            $stmt->bindParam("password", password_hash($password,PASSWORD_DEFAULT), PDO::PARAM_STR);

            $stmt->execute();
            $count = $stmt->rowcount();      

            if($count > 0)
            {
                return $count;
            }
            else{
                return false;
            }
            $db=null;   
        }
        // user login authentication

        public function loginAuth($username, $password){
            $db = getdbConnection();
            $stmt = $db->prepare("SELECT username, password FROM client WHERE username=:username");
            $stmt->bindParam("username", $username, PDO::PARAM_STR);
            $stmt->execute();
            

            if( $stmt->rowCount()== 1) // checking number of rows affected
            {
                    $data = $stmt->fetch(PDO::FETCH_OBJ);
                    $userHashpass = $data->password;

                    if(password_verify($password, $userHashpass)){
                        return $data;
                    }
                    else{
                        return false;
                    }
                }
            else{

                   return false;
            }
        }

        //Booking an appointment 

        public function bookAppointment($fullname, $emailaddress, $contact, $date, $gender, $service, $message){
            $db = getdbConnection();
            $stmt = $db->prepare("INSERT INTO appointment(fullname, email, contact, appointment_date, gender, service_type, appointment_message) VALUES (:fullname, :email, :contact, :appointment_date, :gender, :service_type, :appointment_message)");
            $stmt->bindParam("fullname", $fullname, PDO::PARAM_STR);
            $stmt->bindParam("email", $emailaddress, PDO::PARAM_STR);
            $stmt->bindParam("contact", $contact, PDO::PARAM_STR);
            $stmt->bindParam("appointment_date", $date, PDO::PARAM_STR);
            $stmt->bindParam("gender", $gender, PDO::PARAM_STR);
            $stmt->bindParam("service_type", $service, PDO::PARAM_STR);
            $stmt->bindParam("appointment_message", $message, PDO::PARAM_STR);

           $result = $stmt->execute();
           if ($result) {
               return true;
           }
           else{
               return false;
           }
        }

        // fetching all products
        public function FetchAllProducts(){
            $db = getdbConnection();
            $stmt = $db->prepare("SELECT * FROM products");
            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_OBJ);
            
            if ($data) {
                return $data;
                $db=null;
            }
            else{
                return false;
            }
        
        }

        // fetching single product

        public function getSingleProduct($data){
            $db = getdbConnection();
            $stmt = $db->prepare('SELECT * FROM products WHERE product_id=:id');
            $stmt->bindParam("id", $data, PDO::PARAM_STR);
            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_OBJ);

            if ($data) {
                # code...
                return $data;
                $db=null;
            }
            else{
                return false;
            }
        }

        //updating shopping cart

        public function addToOrders($data, $transID){
            $db = getdbConnection();
            $stmt = $db->prepare("INSERT INTO orders(product_id, transID, username,product_name, product_type, price, quantity) VALUES(:id,:trans, :username,:product_name, :product_type, :price, :quantity)");
            $stmt->bindParam("id", $data['product-id'], PDO::PARAM_INT);
            $stmt->bindParam("trans", $transID, PDO::PARAM_STR);
            $stmt->bindParam("username", $data['username'], PDO::PARAM_STR);
            $stmt->bindParam("product_name", $data['product_name'], PDO::PARAM_STR);
            $stmt->bindParam("product_type", $data['product_type'], PDO::PARAM_STR);
            $stmt->bindParam("price", $data['price'], PDO::PARAM_INT);
            $stmt->bindParam("quantity", $data['quantity'], PDO::PARAM_INT);
            $result =$stmt->execute();

            if ($result) {
                # code...
                return true;
            }
            else{
                return false;
            }
        }

        //getting completed orders by user

        public function getOrderedProducts($username){
            $db = getdbConnection();
            $stmt = $db->prepare("SELECT * FROM orders WHERE username=:username and status ='complete'");
            $stmt->bindParam("username", $username, PDO::PARAM_STR);
            $result = $stmt->execute();

            if ($result) {
                # code...
                $data = $stmt->rowCount();
                return $data;
            }
            else{
                return false;
            }
        }
        // update cart on payment completion

        public function updateOrders($prodID, $username){
            $db = getdbConnection();
            $stmt = $db->prepare("UPDATE orders  SET status='complete' WHERE username=:username and product_id =:id");
            $stmt->bindParam("username", $username, PDO::PARAM_STR);
            $stmt->bindParam("id", $prodID, PDO::PARAM_INT);
            $result = $stmt->execute();

            if ($result) {
                # code...
                return true;
            }
            else{
                return false;
            }
        }

        //get single user

        public function getClient($username){
            $db = getdbConnection();
            $stmt = $db->prepare("SELECT * FROM client WHERE username=:username ");
            $stmt->bindParam("username", $username, PDO::PARAM_STR);
            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_OBJ);

            if ($data) {
                # code...
                return $data;
            }
            else{
                return false;
            }
        }
        //membership subscription

        public function subscribeMembership($data, $transID, $id){
            $db = getdbConnection();
            $stmt = $db->prepare("INSERT INTO membership(username, membership_type, amount, duration, transID) VALUES( :username,:membership_type, :amount, :duration, :transid)");
            $stmt->bindParam("username", $id, PDO::PARAM_STR);
            $stmt->bindParam("membership_type", $data['name'], PDO::PARAM_STR);
            $stmt->bindParam("amount", $data['price'], PDO::PARAM_INT);
            $stmt->bindParam("duration", $data['duration'], PDO::PARAM_INT);
            $stmt->bindParam("transid", $transID, PDO::PARAM_STR);
        
            $result =$stmt->execute();

            if ($result) {
                # code...
                return true;
            }
            else{
                return false;
            }
        }

        //adding inquiries to the database
        public function addInquiry($data){
            $db = getdbConnection();
            $stmt = $db->prepare("INSERT INTO inquiries(firstname, lastname, email, message) VALUES( :firstname, :lastname, :email, :message)");
            $stmt->bindParam("firstname", $data['firstname'], PDO::PARAM_STR);
            $stmt->bindParam("lastname", $data['lastname'], PDO::PARAM_STR);
            $stmt->bindParam("email", $data['email'], PDO::PARAM_STR);
            $stmt->bindParam("message", $data['message'], PDO::PARAM_STR);
        
            $result =$stmt->execute();

            if ($result) {
                # code...
                return true;
            }
            else{
                return false;
            }
        }

    }
?>