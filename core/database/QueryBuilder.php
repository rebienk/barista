<?php
class QueryBuilder
{
    protected $pdo;
    /**
     * @inheritDoc
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
        if (!isset($_SESSION)) { session_start(); }
    }

    public function selectAll($table, $intoClass)
    {
        /**
         *  $statement all data for given table
         *  $intoClass define class for output from the table
         */
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);

    }

    public function SelectAllRecipes() {

        try{

            $statement = $this->pdo->prepare("SELECT * FROM recipees");
            $statement->execute();

            //Create table layout for the view
            ?>
            <div class="row">
            <div class="col-12">
            <div class="content-box-large">
            <div class="card-header">
                <div class="card-title">Recepten</div>

            </div>
            <div class="card-body">
            <table class="table table-light">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Step 1</th>
                    <th scope="col">Ingredient 1</th>
                    <th scope="col">Step 2</th>
                    <th scope="col">Ingredient 2</th>
                    <th scope="col">Step 3</th>
                    <th scope="col">Ingredient 3</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                </tr>


                <?php
                /* fetch values from the tables */
                $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                foreach ($result as $value){
                    $recpname = $value['name'];
                    $description = $value['description'];
                    $step01 = $value['step01'];
                    $ingredient01 = $value['ingredient01'];
                    $step02 = $value['step02'];
                    $ingredient02 = $value['ingredient02'];
                    $step03 = $value['step03'];
                    $ingredient03 = $value['ingredient03'];
                    echo "
                        <tr>
                            <td>$recpname</td>
                            <td>$description</td>
                            <td>$step01</td>
                            <td>$ingredient01</td>
                            <td>$step02</td>
                            <td>$ingredient02</td>
                            <td>$step03</td>
                            <td>$ingredient03</td>
                        </tr>";

                };
                return $result;

                ?>
            </table>
            <?php
        }
        catch(PDOException $e)
        {
            echo "Error: " . $e->getMessage();
        }
    }

    public function SelectAllUsers() {

        try{

            $statement = $this->pdo->prepare("SELECT * FROM users");
            $statement->execute();

            //Create table layout for the view
            ?>
            <div class="row">
            <div class="col-12">
            <div class="content-box-large">
            <div class="card-header">
                <div class="card-title.">Users</div>

            </div>
            <div class="card-body">
            <table class="table table-dark">
                <thead class="thead-dark">
                <tr>

                    <th scope="col">Voornaam</th>
                    <th scope="col">Achternaam</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefoonnummer</th>
                    <th scope="col">Wachtwoord</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                </tr>


                <?php
                /* fetch values from the variable*/
                $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                foreach ($result as $value){
                    $fname = $value['fname'];
                    $lname = $value['lname'];
                    $email = $value['email'];
                    $mobile = $value['mobile'];
                    $password = $value['password'];

                    echo "
                        <tr>
                            <td>$fname</td>
                            <td>$lname</td>
                            <td>$email</td>
                            <td>$mobile</td>
                            <td>$password</td>
                        </tr>";

                };
                return $result;

                ?>
            </table>
            <?php
        }
        catch(PDOException $e)
        {
            echo "Error: " . $e->getMessage();
        }
    }

    public function SelectAllGuests() {

        try{

            $statement = $this->pdo->prepare("SELECT * FROM player");
            $statement->execute();

            //Create table layout for the view
            ?>
            <div class="row">
            <div class="col-12">
            <div class="content-box-large">
            <div class="card-header">
                <div class="card-title.">Players</div>

            </div>
            <div class="card-body">
            <table class="table table-dark">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Nickname</th>
                    <th scope="col">Gamestatus</th>
                    <th scope="col">Email</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                </tr>


                <?php
                /* fetch values the var */
                $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                foreach ($result as $value){
                    $nickname = $value['nickname'];
                    $gamestatus = $value['gamestatus'];
                    $email = $value['email'];
                    echo "
                        <tr>
                            <td>$nickname</td>
                            <td>$gamestatus</td>
                            <td>$email</td>
                        </tr>";

                };
                return $result;

                ?>
            </table>
            <?php
        }
        catch(PDOException $e)
        {
            echo "Error: " . $e->getMessage();
        }
    }

    public function Option_games() {

        try{
            // Select id and fname from users
            $statement = $this->pdo->prepare("SELECT id, name FROM games");
            $statement->execute();

            //Create select option
            ?>
            <div class="form-group">
                <select class="custom-select" name="gameid">
                    <option value="" selected>Kies een game hier onder</option>
                    <?php
                    /* fetch values from the tables*/
                    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

                    foreach ($result as $value){
                        $id = $value['id'];
                        $gamename = $value['name'];
                        echo "<option value='$id'>$gamename</option>";
                    };

                    ?>
                </select>
            </div>
            <?php
        }
        catch(PDOException $e)
        {
            echo "Error: " . $e->getMessage();
        }
    }

    public function Option_users_01() {

        try{
            // Select id and fname from users and put it in the variable
            $statement = $this->pdo->prepare("SELECT id, fname FROM users UNION ALL SELECT id, nickname FROM player");
            $statement->execute();

            //Create select option
            ?>
            <div class="form-group">
                <select class="custom-select ud_selects" class="ud_selects" name="playerid01">
                    <option value="" selected>Kies een speler hier onder</option>
                    <?php
                    /* fetch values */
                    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

                    foreach ($result as $value){
                        $id = $value['id'];
                        $fname = $value['fname'];
                        echo "<option value='$id'>$fname</option>";
                    };

                    ?>
                </select>
            </div>
            <?php
        }
        catch(PDOException $e)
        {
            echo "Error: " . $e->getMessage();
        }
    }

    public function Option_users_02() {

        try{
            // Select id and fname from users table
            $statement = $this->pdo->prepare("SELECT id, fname FROM users UNION ALL SELECT id, nickname FROM player");
            $statement->execute();

            //Create select option for the view
            ?>
            <div class="form-group">
                <select class="custom-select ud_selects"  name="playerid02">
                    <option value="" selected>Kies een speler hier onder</option>
                    <?php
                    /* fetch values */
                    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

                    foreach ($result as $value){
                        $id = $value['id'];
                        $fname = $value['fname'];
                        echo "<option value='$id'>$fname</option>";
                    };

                    ?>
                </select>
            </div>
            <?php
        }
        catch(PDOException $e)
        {
            echo "Error: " . $e->getMessage();
        }
    }

    public function Option_users_03() {

        try{
            // Select id and fname from users table
            $statement = $this->pdo->prepare("SELECT id, fname FROM users UNION ALL SELECT id, nickname FROM player");
            $statement->execute();

            //Create select option for the view
            ?>
            <div class="form-group">
                <select class="custom-select ud_selects"  name="playerid03">
                    <option value="" selected>Kies een speler hier onder</option>
                    <?php
                    /* fetch values */
                    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

                    foreach ($result as $value){
                        $id = $value['id'];
                        $fname = $value['fname'];
                        echo "<option value='$id'>$fname</option>";
                    };

                    ?>
                </select>
            </div>
            <?php
        }
        catch(PDOException $e)
        {
            echo "Error: " . $e->getMessage();
        }
    }

    public function Option_users_04() {

        try{
            // Select id and fname from users table
            $statement = $this->pdo->prepare("SELECT id, fname FROM users UNION ALL SELECT id, nickname FROM player");
            $statement->execute();

            //Create select option for the view
            ?>
            <div class="form-group">
                <select class="custom-select ud_selects"  name="playerid04">
                    <option value="" selected>Kies een speler hier onder</option>
                    <?php
                    /* fetch values */
                    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

                    foreach ($result as $value){
                        $id = $value['id'];
                        $fname = $value['fname'];
                        echo "<option value='$id'>$fname</option>";
                    };

                    ?>
                </select>
            </div>
            <?php
        }
        catch(PDOException $e)
        {
            echo "Error: " . $e->getMessage();
        }
    }

    public function SelectAllRecipees() {

        try{

            //$statement = $this->pdo->prepare("SELECT * FROM battles");
            $statement = $this->pdo->prepare("SELECT * FROM recipees");
            $statement->execute();
            //Create table layout
            ?>
            <div class="row">
            <div class="col-12">
            <div class="content-box-large">
            <div class="card-header">
                <div class="card-title.">Recipees</div>

            </div>
            <div class="card-body">
            <table class="table table-dark">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Step 1</th>
                    <th scope="col">Milk(ml)</th>
                    <th scope="col">Step 2</th>
                    <th scope="col">Ingredient 2</th>
                    <th scope="col">Step 3</th>
                    <th scope="col">Ingredient 3</th>
                    <th scope="col">Time to prep(MIN)</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                </tr>


                <?php
                /* fetch values from the tables */
                $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                foreach ($result as $value){
                    $recpname = $value['name'];
                    $description = $value['description'];
                    $step01 = $value['step01'];
                    $ingredient01 = $value['ingredient01'];
                    $step02 = $value['step02'];
                    $ingredient02 = $value['ingredient02'];
                    $step03 = $value['step03'];
                    $ingredient03 = $value['ingredient03'];
                    $timeToPrep = $value['timeToPrep'];
                    echo "
                        <tr>
                            <td><a href=''>$recpname</a></td>
                            <td>$description</td>
                            <td>$step01</td>
                            <td>$ingredient01</td>
                            <td>$step02</td>
                            <td>$ingredient02</td>
                            <td>$step03</td>
                            <td>$ingredient03</td>
                            <td>$timeToPrep</td>
                        </tr>";

                };
                return $result;

                ?>
            </table>
            <?php
        }
        catch(PDOException $e)
        {
            echo "Error: " . $e->getMessage();
        }
    }

    public function RegistreerUser($values){
        try {
            //Bind values to parameter and insert into DB
            $statement = $this->pdo->prepare("INSERT INTO users (fname, lname, email, mobile, password) VALUES (:fname, :lname, :email, :mobile, :password)");
            $statement->bindParam(':fname',$values['fname']);
            $statement->bindParam(':lname', $values['lname']);
            $statement->bindParam(':email',$values['email']);
            $statement->bindParam(':mobile',$values['mobile']);
            $statement->bindParam(':password',$values['password']);

            $result = $statement->execute();

            //if the the user is made then you will get a success message
            echo " <script type=\"text/javascript\"> setTimeout(function(){ swal(\"Gelukt\", \"Gebruiker aangemaakt je word nu doorverwezen naar de inlog pagina\", \"success\"); }, 100); </script>";
            header('refresh:5;url=/~s1122010/P1_OOAPP_Tentamen/');
        }
        catch(PDOException $e)
        {
            echo $statement . "<br>" . $e->getMessage();
        }

    }

    public function Insert_new_recipe($values){
        try {
            //Bind values to parameter and insert into DB
            $statement = $this->pdo->prepare("INSERT INTO recipees (
              name, description, step01, ingredient01, step02, ingredient02, step03, ingredient03, timeToPrep) 
              VALUES (:name, :description, :step01, :ingredient01, :step02, :ingredient02, :step03, :ingredient03, :timeToPrep)");
            $statement->bindParam(':name',$values['name']);
            $statement->bindParam(':description',$values['description']);
            $statement->bindParam(':step01', $values['step01']);
            $statement->bindParam(':ingredient01',$values['ingredient01']);
            $statement->bindParam(':step02',$values['step02']);
            $statement->bindParam(':ingredient02',$values['ingredient02']);
            $statement->bindParam(':step03',$values['step03']);
            $statement->bindParam(':ingredient03',$values['ingredient03']);
            $statement->bindParam(':ingredient03',$values['ingredient03']);
            $statement->bindParam(':timeToPrep',$values['timeToPrep']);


            $result = $statement->execute();

            //if the a new game is made then you will get a success message
            echo " <script type=\"text/javascript\"> 
            setTimeout(function(){ swal(
            \"Gelukt\", \"Nieuw recept aangemaakt, u wordt automatisch naar de volgende pagina gebracht momement geduld a.u.b\", \"success\"); }, 200); 
            </script>";
            header('refresh:5;url=/~s1122010/P1_OOAPP_Tentamen/recepten');
        }
        catch(PDOException $e)
        {
            echo $statement . "<br>" . $e->getMessage();
        }

    }


    public function Insert_new_battle($values){
        try {
            //Bind values to parameter and insert into DB
            $statement = $this->pdo->prepare("INSERT INTO battles (dtPlayed, gameid, playerid01, playerid02, playerid03, playerid04, wonby, score) VALUES (:dtPlayed, :gameid, :playerid01, :playerid02, :playerid03, :playerid04, :wonby, :score)");
            $statement->bindParam(':dtPlayed',$values['dtPlayed']);
            $statement->bindParam(':gameid', $values['gameid']);
            $statement->bindParam(':playerid01',$values['playerid01']);
            $statement->bindParam(':playerid02',$values['playerid02']);
            $statement->bindParam(':playerid03',$values['playerid03']);
            $statement->bindParam(':playerid04',$values['playerid04']);
            $statement->bindParam(':wonby',$values['wonby']);
            $statement->bindParam(':score',$values['score']);

            $result = $statement->execute();

            //if a new battle is made then you will get a success message
            echo " <script type=\"text/javascript\"> setTimeout(function(){ swal(\"Gelukt\", \"Nieuwe battle aangemaakt.\", \"success\"); }, 500); </script>";
            header('refresh:5;url=/~s1122010/P1_OOAPP_Tentamen/battles');
        }
        catch(PDOException $e)
        {
            echo $statement . "<br>" . $e->getMessage();
        }

    }

    public function LoginAsUser($values)
    {   try{
        //Contains email in the var
        $email = $values['email'];
        //SQL query being prepared and executed
        $statement = $this->pdo->prepare("SELECT * FROM users WHERE email = '$email' ");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        print_r($result);
        if($result){
            //Hashed password from database
            $hash = $result[0]['password'];
        }
        //Check if user exists
        if (isset($result[0])) {
            if (password_verify(trim($_POST['password']), $hash)) {
                // Correcte inlog
                    $_SESSION['UserLogin'] = $result;
                    //print_r($_SESSION);
                    header('Location: /~s1122010/P1_OOAPP_Tentamen/dashboard');
            } else {
                // the wrong password message
                echo " <script type=\"text/javascript\"> setTimeout(function(){ swal(\"Fout\", \"Data niet gevonden, OPNIEUW!.\", \"error\"); }, 500); </script>";
            }
        }else{
            echo " <script type=\"text/javascript\"> setTimeout(function(){ swal(\"Fout\", \"Data niet gevonden, OPNIEUW!.\", \"error\"); }, 500); </script>";
        }

    }
    catch(PDOException $e)
    {
        echo "Error: " . $e->getMessage();
    }

        return $result;
    }

    public function LoginAsGuest($values)
    {
        try {
            $gamestatus = 1;
            //Bind values to parameter and insert into DB
            $statement = $this->pdo->prepare("INSERT INTO player (nickname, gamestatus, email) VALUES (:nickname, :gamestatus, :email)");
            $statement->bindParam(':nickname',$values['nickname']);
            $statement->bindParam(':gamestatus', $gamestatus);
            $statement->bindParam(':email', $values['email']);

            $result = $statement->execute();

            // if a guest user is made then you will get a success message
            echo " <script type=\"text/javascript\"> setTimeout(function(){ swal(\"Gelukt\", \"Gast account aangemaakt. Er word nu een mail verstuurd naar je ingevulde email om je account te voltooien.\", \"success\"); }, 500); </script>";

            // Set sender email for myself
            $email = "s1122010@student.windesheim.nl";

            // Define the receiver of the email
            $to = $values['email'];

            // Define the subject of the email
            $subject = "Nieuw gast account word een echte gebruiker.";

            // Define the message to be sent.
            $message = "<a href='https://adsd.clow.nl/~s1122010/P1_OOAPP_Tentamen/'>Word gebruiker</a>";

            // Define the headers we want passed.
            $header = "From: $email";

            // Send the email
            $mail_sent = mail($to, $subject, $message, $header);

            //if the message is sent successfully
            echo $mail_sent ? "Mail sent" : "";
        }
        catch(PDOException $e)
        {
            echo $statement . "<br>" . $e->getMessage();
        }
    }
}