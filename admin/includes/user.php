<?php
	
	class User extends Db_object {
		protected static $db_table = "users";
		protected static $db_table_fields = array('username', 'password', 'first_name', 'last_name');
		public $id;
		public $username;
		public $password;
		public $first_name;
		public $last_name;

		///OLD BUT WILL KEEP HERE FOR PREVIOUS EXAMPLES
		public static function find_all_users() {
			return self::find_this_query("SELECT * FROM users");
		}

		public static function verify_user($username, $password) {
			global $database;

			$username = $database->escape_string($username);
			$password = $database->escape_string($password);

			$sql = "SELECT * FROM " . self::$db_table . " WHERE ";
			$sql .= "username = '{$username}' ";
			$sql .= "AND password = '{$password}' LIMIT 1";

			$the_result_array = self::find_by_query($sql);

			return !empty($the_result_array) ? array_shift($the_result_array) : false;
		}

	}
?>