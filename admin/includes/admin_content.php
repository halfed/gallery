<div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Admin
                            <small>Subheading</small>
                        </h1>

						<?php
							//$user = User::find_user_by_id(4);
                            //$user->username = "bensolo";
                            //$user->update();
                            //$user->first_name = "ben";
                            //$user->last_name = "solo";
                            //$user->password = "123";
                            //$user->save();
                            /*$user->username = "Example_username";
                            $user->password = "Example_password";
                            $user->first_name = "Ben";
                            $user->last_name = "Kenobi";*/

                            //$user->create();
							//$result_set = User::find_all_users();
							
							/*while($row = mysqli_fetch_array($result_set)) {
								echo $row['username'] . "<br/>";
							}*/

							/*$found_user = User::find_user_by_id(2);
							
							$user = User::instantiation($found_user);
							
							echo $user->username;*/
                            /*$user = User::find_user_by_id(5);
                            $user->username = "aullera_nylon";
                            $user->password = "999";
                            $user->first_name = "aullera";
                            $user->last_name = "nylon";
                            $user->update();*/

                            // $user = new User();
                            // $user->username = "NEW USER";
                            // $user->save();

							// $users = User::find_all();
							// foreach($users as $user) {
							// 	echo $user->username;
							// }



                            $photos = Photo::find_all();
							foreach($photos as $photo) {
								echo $photo->title;
							}


                            // $photo = new Photo();
                            // $photo->title = "NEW PHOTO";
                            // $photo->description = "NEW DESCRIPTION";
                            // $photo->filename = "ALLUERA04";
                            // $photo->save();

                            ////$users = User::find_all_users();
							/*foreach($users as $user) {
								echo $user->id . "<br/>";
							}*/

							//$found_user = User::find_user_by_id(2);
							//echo $found_user->username;

                            //$user = User::find_user_by_id(3);
                            //echo $user->first_name;
                            //$user->first_name = "Kilo";
                            //$user->delete();
                            /*$user = new User();

                            $user->username = "tpac";
                            $user->password = "900";
                            $user->first_name = "Tupac";
                            $user->last_name = "Shakur";

                            $user->create();*/
						?>

                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->