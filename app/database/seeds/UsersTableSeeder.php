<?php

class UsersTableSeeder extends Seeder {

    public function run()
    {
    	// Uncomment the below to wipe the table clean before populating
    	DB::statement('ALTER TABLE users AUTO_INCREMENT = 0');

    	DB::table('users')->delete();

        $users = array(
            // Actual users
        	['forename' => 'Alex', 'surname' => 'Dobinson', 'university_id' => 1, 'profile_pic' => ''],
        	['forename' => 'Dhwanit', 'surname' => 'Zaveri', 'university_id' => 1, 'profile_pic' => ''],
        	['forename' => 'Stefan', 'surname' => 'van der Fluit', 'university_id' => 1, 'profile_pic' => ''],
        	['forename' => 'Victor', 'surname' => 'Vintu', 'university_id' => 1, 'profile_pic' => ''],
        	['forename' => 'David', 'surname' => 'Linderman', 'university_id' => 1, 'profile_pic' => ''],


            // Fake Warwick users
            ['forename' => 'Tom', 'surname' => 'Smith', 'university_id' => 1, 'profile_pic' => ''],
            ['forename' => 'Matthew', 'surname' => 'Glancy', 'university_id' => 1, 'profile_pic' => ''],
            ['forename' => 'Tom', 'surname' => 'Fox', 'university_id' => 1, 'profile_pic' => ''],
            ['forename' => 'Pat', 'surname' => 'Fitzgibbon', 'university_id' => 1, 'profile_pic' => ''],
            ['forename' => 'Rick', 'surname' => 'Taylor', 'university_id' => 1, 'profile_pic' => '']


            // // Fake Oxford students
            // ['forename' => 'Mike', 'surname' => 'Smith', 'university_id' => 2, 'profile_pic' => ''],
            // ['forename' => 'Gary', 'surname' => 'Nugent', 'university_id' => 2, 'profile_pic' => ''],
            // ['forename' => 'Olivia', 'surname' => 'Moran', 'university_id' => 2, 'profile_pic' => ''],
            // ['forename' => 'Alek', 'surname' => 'Lagowski', 'university_id' => 2, 'profile_pic' => ''],
            // ['forename' => 'Lauren', 'surname' => 'Mundie', 'university_id' => 2, 'profile_pic' => ''],


            // // Fake Cambridge students
            // ['forename' => 'Mike', 'surname' => 'Smith', 'university_id' => 3, 'profile_pic' => ''],
            // ['forename' => 'Gary', 'surname' => 'Nugent', 'university_id' => 3, 'profile_pic' => ''],
            // ['forename' => 'Olivia', 'surname' => 'Moran', 'university_id' => 3, 'profile_pic' => ''],
            // ['forename' => 'Alek', 'surname' => 'Lagowski', 'university_id' => 3, 'profile_pic' => ''],
            // ['forename' => 'Lauren', 'surname' => 'Mundie', 'university_id' => 3, 'profile_pic' => ''],


            // // Fake Imperial students
            // ['forename' => 'Mike', 'surname' => 'Smith', 'university_id' => 4, 'profile_pic' => ''],
            // ['forename' => 'Gary', 'surname' => 'Nugent', 'university_id' => 4, 'profile_pic' => ''],
            // ['forename' => 'Olivia', 'surname' => 'Moran', 'university_id' => 4, 'profile_pic' => ''],
            // ['forename' => 'Alek', 'surname' => 'Lagowski', 'university_id' => 4, 'profile_pic' => ''],
            // ['forename' => 'Lauren', 'surname' => 'Mundie', 'university_id' => 4, 'profile_pic' => ''],


            // // Fake UCL students
            // ['forename' => 'Mike', 'surname' => 'Smith', 'university_id' => 5, 'profile_pic' => ''],
            // ['forename' => 'Gary', 'surname' => 'Nugent', 'university_id' => 5, 'profile_pic' => ''],
            // ['forename' => 'Olivia', 'surname' => 'Moran', 'university_id' => 5, 'profile_pic' => ''],
            // ['forename' => 'Alek', 'surname' => 'Lagowski', 'university_id' => 5, 'profile_pic' => ''],
            // ['forename' => 'Lauren', 'surname' => 'Mundie', 'university_id' => 5, 'profile_pic' => ''],
        );

        // Uncomment the below to run the seeder
        DB::table('users')->insert($users);

    	DB::table('authentication')->delete();

        $auth = array(
            // Actual users
        	['user_id' => 1, 'email' => 'A.J.Dobinson@warwick.ac.uk', 'password' => Hash::make('test'), 'user_type' => 0, 'activated' => 1, 'pcode' => 'a4dF3'],
        	['user_id' => 2, 'email' => 'D.Zaveri@warwick.ac.uk', 'password' => Hash::make('test'), 'user_type' => 0, 'activated' => 1, 'pcode' => '3Erty'],
        	['user_id' => 3, 'email' => 'S.van-der-fluit@warwick.ac.uk', 'password' => Hash::make('test'), 'user_type' => 0, 'activated' => 1, 'pcode' => 'l982x'],
        	['user_id' => 4, 'email' => 'V.Vintu@warwick.ac.uk', 'password' => Hash::make('test'), 'user_type' => 0, 'activated' => 1, 'pcode' => '5Yj8Z'],
        	['user_id' => 5, 'email' => 'D.B.Linderman@warwick.ac.uk', 'password' => Hash::make('test'), 'user_type' => 0, 'activated' => 1, 'pcode' => 'atrye'],


            // Fake Warwick students
            ['user_id' => 6, 'email' => 'T.Smith@warwick.ac.uk', 'password' => Hash::make('test'), 'user_type' => 0, 'activated' => 1, 'pcode' => 'rere4'],
            ['user_id' => 7, 'email' => 'M.Glancy@warwick.ac.uk', 'password' => Hash::make('test'), 'user_type' => 0, 'activated' => 1, 'pcode' => 'df2rv'],
            ['user_id' => 8, 'email' => 'T.Fox@warwick.ac.uk', 'password' => Hash::make('test'), 'user_type' => 0, 'activated' => 1, 'pcode' => '32csd'],
            ['user_id' => 9, 'email' => 'P.Fitzgibbon@warwick.ac.uk', 'password' => Hash::make('test'), 'user_type' => 0, 'activated' => 1, 'pcode' => '53f32'],
            ['user_id' => 10, 'email' => 'R.Taylor@warwick.ac.uk', 'password' => Hash::make('test'), 'user_type' => 0, 'activated' => 1, 'pcode' => 'dfd23']
        );

        DB::table('authentication')->insert($auth);

    }

}