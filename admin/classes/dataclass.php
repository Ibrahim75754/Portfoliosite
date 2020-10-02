<?php 
	class dataclass{
		public $db;

		public function __construct(){
			$this->db = new DATABASE();
		}

		public function  insertintotopbar($post){
			$email = $post['email'];
			$address = $post['address'];
			$phone = $post['number'];

			$query = "UPDATE  address set email='$email', address='$address', phone='$phone'";

			$data = $this->db->run($query);
			return $data;
		}
		public function showall(){
			$query = "SELECT * from address";
			$data = $this->db->run($query);
			return $data;
		}

		public function ShowAllBlog(){
			$query = "SELECT * From navbar";
			$data = $this->db->run($query);
			return $data;
		}
		public function  insertintopartnar($post){
			$subtitle = $post['subtitle'];
			$title = $post['title'];
			$text = $post['text'];
			

			$query = "INSERT INTO  partnar values(null,'$subtitle','$title','$text',null)";

			$data = $this->db->run($query);
			return $data;
		}
		public function  updatepartnar($post){
			$subtitle = $post['subtitle'];
			$title = $post['title'];
			$text = $post['text'];
			$img = $post['img'];

			$query = "UPDATE  partnar set subtitle='$subtitle', title='$title', text='$text', img='$img'";

			$data = $this->db->run($query);
			return $data;
		}
		public function showpartnar(){
			$query = "SELECT * from partnar";
			$data = $this->db->run($query);
			return $data;
		}


		public function ShowTeam(){
			$query = "SELECT * from team";
			$data = $this->db->run($query);
			return $data;
		}
		public function  InsertIntoTeam($post,$files){
			$name = $post['name'];
			$title = $post['title'];
			$text = $post['text'];
			$img=$files["img"];
					
			$FileName=$img["name"];
			$TmpName=$img["tmp_name"];
		
			move_uploaded_file($TmpName,"../img/$FileName");
	
			$query = "INSERT INTO  team values(null,'$FileName','$text','$name','$title')";

			$data = $this->db->run($query);
			return $data;
		}
		public function ShowOneTeam($id){
			$query = "SELECT * from team where id='$id'";
			$data = $this->db->run($query);
			return $data;
		}	
		public function TeamEdit($post,$files,$id){
			$name = $post['name'];
			$title = $post['title'];
			$text = $post['text'];
			$img=$files["img"];
					
			$FileName=$img["name"];
			$TmpName=$img["tmp_name"];
		
			move_uploaded_file($TmpName,"../img/$FileName");

			$query = "UPDATE  team set name='$name', title='$title', text='$text', img='$FileName' where id='$id'";

			$data = $this->db->run($query);
			return $data;
		}
		public function TeamDelete($id){
		$query = "DELETE  FROM team where id='$id'";
		$data = $this->db->run($query);
		return $data;
		}
		public function ShowAllTeamPerson(){
			$query = "SELECT * From team_profile";
			$data = $this->db->run($query);
			return $data;
		}
		public function ShowTeamPerson($id){
			$query = "SELECT * From team_profile where id='$id'";
			$data = $this->db->run($query);
			return $data;
		}
		public function  InsertIntoTeamPerson($post,$files){
			$foreignkey = $post['category'];
			$name = $post['name'];
			$title = $post['title'];
			$email = $post['email'];
			$phone = $post['phone'];
			$description = $post['description'];
			$img=$files["img"];
					
			$FileName=$img["name"];
			$TmpName=$img["tmp_name"];
		
			move_uploaded_file($TmpName,"../img/$FileName");
	
			$query = "INSERT INTO  team_profile values(null,'$foreignkey','$name','$FileName','$title','$email','$phone','$description')";

			$data = $this->db->run($query);
			return $data;
		}
		public function TeamPersonDelete($id){
			$query = "DELETE FROM team_profile where id='$id'"; 
			$data = $this->db->run($query);
			return $data;
		}
		public function TeamPersonEdit($post,$files,$id){
			$name = $post['name'];
			$title = $post['title'];
			$email = $post['email'];
			$phone = $post['phone'];
			$text = $post['text'];
			$img=$files["img"];
					
			$FileName=$img["name"];
			$TmpName=$img["tmp_name"];
		
			move_uploaded_file($TmpName,"../img/$FileName");

			$query = "UPDATE  team_profile set name='$name', img='$FileName', title='$title', email='$email', phone='$phone', description='$text' where id='$id'";

			$data = $this->db->run($query);
			return $data;
		}



		public function ShowClient(){
			$query = "SELECT * From client";
			$data = $this->db->run($query);
			return $data;
		}
		public function  InsertIntoClient($post,$files){
			$name = $post['name'];
			$title = $post['title'];
			$quote = $post['quote'];
			$grade = $post['grade'];
			$img=$files["img"];
					
			$FileName=$img["name"];
			$TmpName=$img["tmp_name"];
		
			move_uploaded_file($TmpName,"../img/$FileName");
	
			$query = "INSERT INTO  client values(null,'$name','$quote','$FileName','$title','$grade')";

			$data = $this->db->run($query);
			return $data;
		}
		public function ShowClientForEdit($id){
			$query = "SELECT * From client where id='$id'";
			$data = $this->db->run($query);
			return $data;
		}
		public function ClientEdit($post,$files,$id){
			$name = $post['name'];
			$title = $post['title'];
			$quote = $post['quote'];
			$grade = $post['grade'];
			$img=$files["img"];
					
			$FileName=$img["name"];
			$TmpName=$img["tmp_name"];
		
			move_uploaded_file($TmpName,"../img/$FileName");

			$query = "UPDATE  client set name='$name', img='$FileName', title='$title', quote='$quote', obtain_grade='$grade' where id='$id'";

			$data = $this->db->run($query);
			return $data;
		}
		public function ClientDelete($id){
			$query = "DELETE FROM client where id='$id'"; 
			$data = $this->db->run($query);
			return $data;
		}


		public function ShowCard1(){
			$query = "SELECT * From card1";
			$data = $this->db->run($query);
			return $data;
		}
		public function  InsertIntoCard1($post){
			$icon = $post['icon'];
			$title = $post['title'];
			$text = $post['text'];
	
			$query = "INSERT INTO  card1 values(null, '$icon','$title','$text')";

			$data = $this->db->run($query);
			return $data;
		}
		public function ShowCard1ForEdit($id){
			$query = "SELECT * From card1 where id='$id'";
			$data = $this->db->run($query);
			return $data;
		}
		public function Card1Edit($post,$id){
			$icon = $post['icon'];
			$title = $post['title'];
			$text = $post['text'];

			$query = "UPDATE  card1 set icon='$icon', title='$title', text='$text' where id='$id'";

			$data = $this->db->run($query);
			return $data;
		}
		public function Card1Delete($id){
			$query = "DELETE FROM card1 where id='$id'"; 
			$data = $this->db->run($query);
			return $data;
		}



		public function ShowCard2(){
			$query = "SELECT * From card2";
			$data = $this->db->run($query);
			return $data;
		}
		public function  InsertIntoCard2($post){
			$icon = $post['icon'];
			$title = $post['title'];
			$text = $post['text'];
	
			$query = "INSERT INTO  card2 values(null, '$icon','$title','$text')";

			$data = $this->db->run($query);
			return $data;
		}
		public function ShowCard2ForEdit($id){
			$query = "SELECT * From card2 where id='$id'";
			$data = $this->db->run($query);
			return $data;
		}
		public function Card2Edit($post,$id){
			$icon = $post['icon'];
			$title = $post['title'];
			$text = $post['text'];

			$query = "UPDATE  card2 set icon='$icon', title='$title', text='$text' where id='$id'";

			$data = $this->db->run($query);
			return $data;
		}
		public function Card2Delete($id){
			$query = "DELETE FROM card2 where id='$id'"; 
			$data = $this->db->run($query);
			return $data;
		}


		public function ShowNews(){
			$query = "SELECT * From news";
			$data = $this->db->run($query);
			return $data;
		}
		public function  InsertIntonews($post,$files){
			$type = $post['type'];
			$title = $post['title'];
			$text = $post['text'];
			$author = $post['author'];
			$date = $post['date'];
			$author_like = $post['author_like'];

			$img=$files["img"];		
			$FileName=$img["name"];
			$TmpName=$img["tmp_name"];

			$img2=$files["author_img"];		
			$FileName2=$img2["name"];
			$TmpName2=$img2["tmp_name"];
		
			move_uploaded_file($TmpName,"../img/$FileName");
			move_uploaded_file($TmpName2,"../img/$FileName2");

			$query = "INSERT INTO  news values(null,'$type','$title', '$text','$FileName','$author','$FileName2','$date', '$author_like')";

			$data = $this->db->run($query);
			return $data;
		}
		public function ShownewsForEdit($id){
			$query = "SELECT * From news where id='$id'";
			$data = $this->db->run($query);
			return $data;
		}
		public function newsEdit($post,$files,$id){
			$type = $post['type'];
			$title = $post['title'];
			$text = $post['text'];
			$author = $post['author'];
			$date = $post['date'];
			$author_like = $post['author_like'];

			$img=$files["img"];		
			$FileName=$img["name"];
			$TmpName=$img["tmp_name"];

			$img2=$files["author_img"];		
			$FileName2=$img2["name"];
			$TmpName2=$img2["tmp_name"];
		
			move_uploaded_file($TmpName,"../img/$FileName");
			move_uploaded_file($TmpName2,"../img/$FileName2");

			$query = "UPDATE  news set type='$type', title='$title', text='$text', author='$author', date='$date', author_like='$author_like' ,img='$FileName', author_img='$FileName2' where id='$id'";

			$data = $this->db->run($query);
			return $data;
		}
		public function newsDelete($id){
			$query = "DELETE FROM news where id='$id'"; 
			$data = $this->db->run($query);
			return $data;
		}


		public function showWork(){
			$query = "SELECT * from work";
			$data = $this->db->run($query);
			return $data;
		}
		public function WorkDelete($id){
			$query = "DELETE FROM work where id='$id'";
			$data = $this->db->run($query);
			return $data;
		}
		public function  InsertIntoWork($post){
			$type = $post['name'];
			$query = "INSERT INTO  work values(null,'$type')";
			$data = $this->db->run($query);
			return $data;
		}
		public function ShowWorkForEdit($id){
			$query = "SELECT * From work where id='$id'";
			$data = $this->db->run($query);
			return $data;
		}
		public function WorkEdit($post,$id){
			$type = $post['type'];

			$query = "UPDATE  work set work_name='$type' where id='$id'";

			$data = $this->db->run($query);
			return $data;
		}


		public function ShowPortfolio(){
			$query = "SELECT * From portfolio";
			$data = $this->db->run($query);
			return $data;
		}
		public function ShowPortfolioForEdit($id){
			$query = "SELECT * From portfolio where id='$id'";
			$data = $this->db->run($query);
			return $data;
		}
		public function  InsertIntoPortfolio($post,$files){
			$foreignkey = $post['category'];
			$title = $post['title'];
			$text = $post['text'];
			$img=$files["img"];
					
			$FileName=$img["name"];
			$TmpName=$img["tmp_name"];
		
			move_uploaded_file($TmpName,"../img/$FileName");
	
			$query = "INSERT INTO  portfolio values(null,'$foreignkey','$title','$text','$FileName')";

			$data = $this->db->run($query);
			return $data;
		}
		public function PortfolioDelete($id){
			$query = "DELETE FROM portfolio where id='$id'"; 
			$data = $this->db->run($query);
			return $data;
		}
		public function PortfolioEdit($post,$files,$id){
			$work_id = $post['work_id'];
			$title = $post['title'];
			$text = $post['text'];
			$img=$files["img"];
					
			$FileName=$img["name"];
			$TmpName=$img["tmp_name"];
		
			move_uploaded_file($TmpName,"../img/$FileName");

			$query = "UPDATE  portfolio set work_id='$work_id', img='$FileName', title='$title', text='$text' where id='$id'";

			$data = $this->db->run($query);
			return $data;
		}


		public function ShowProcess(){
			$query = "SELECT * From our_process";
			$data = $this->db->run($query);
			return $data;
		}
		public function ShowProcessForEdit($id){
			$query = "SELECT * From our_process where id='$id'";
			$data = $this->db->run($query);
			return $data;
		}
		public function  InsertIntoProcess($post,$files){
			$icon = $post['icon'];
			$name = $post['name'];
			$text = $post['text'];
	
			$query = "INSERT INTO  our_process values(null,'$icon','$name','$text')";

			$data = $this->db->run($query);
			return $data;
		}
		public function ProcessDelete($id){
			$query = "DELETE FROM our_process where id='$id'"; 
			$data = $this->db->run($query);
			return $data;
		}
		public function ProcessEdit($post,$files,$id){
			$icon = $post['icon'];
			$name = $post['name'];
			$text = $post['text'];

			$query = "UPDATE  our_process set icon='$icon', name='$name', text='$text' where id='$id'";

			$data = $this->db->run($query);
			return $data;
		}



		public function ShowLogo(){
			$query = "SELECT * From client_logo";
			$data = $this->db->run($query);
			return $data;
		}
		public function  InsertIntoLogo($post,$files){
			$logo=$files["logo"];		
			$FileName=$logo["name"];
			$TmpName=$logo["tmp_name"];
		
			move_uploaded_file($TmpName,"../img/$FileName");

			$query = "INSERT INTO  client_logo values(null,'$FileName')";

			$data = $this->db->run($query);
			return $data;
		}
		public function LogoDelete($id){
			$query = "DELETE FROM client_logo where id='$id'"; 
			$data = $this->db->run($query);
			return $data;
		}



		public function ShowMessage(){
			$query = "SELECT * from message";
			$data = $this->db->run($query);
			return $data;
		}



		public function  InsertIntoRegistration($post){
			$name = $post['name'];
			$email = $post['email'];
			$password = $post['password'];
	
			$query = "INSERT INTO  registration values(null,'$name','$email','$password')";

			$data = $this->db->run($query);
			return $data;
		}


		public function  login($post){
			$email = $post['email'];
			$password = $post['password'];
	
			$query = "SELECT * FROM registration WHERE email='$email' AND password='$password'";

			$data = $this->db->run($query);


			$getrow= $this->db->getrow();
			return $getrow;


		}
	}
?>

