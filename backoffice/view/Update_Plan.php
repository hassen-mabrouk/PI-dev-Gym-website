<?php
	include "../controller/PlanningC.php";
	include_once '../model/Planning.php';

	$planningC = new PlanningC();
	$error = "";
	
	if (
		isset($_POST["categorie"]) && 
        isset($_POST["coach"]) &&
        isset($_POST["date_planning"]) && 
        isset($_POST["heure"])
        
	){
		if (
            !empty($_POST["categorie"]) && 
            !empty($_POST["coach"]) && 
            !empty($_POST["date_planning"]) && 
            !empty($_POST["heure"])
        ) {
            $planning = new Planning(
                $_POST['categorie'],
                $_POST['coach'], 
                $_POST['date_planning'],
                $_POST['heure']
			);
			
            $planningC->modifierPlanning($planning, $_GET['id_planning']);
         //   header('refresh:5;url=show_planning copie.php');
        }
        else
            $error = "Missing information";
	}

?>
<html>
	<head>
		<title>Modifier Planning</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<button><a href="gp copie.php">Retour à la liste</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
		
		<?php
			if (isset($_GET['id_planning'])){
				$planning = $planningC->recupererPlanning($_GET['id_planning']);
				
		?>
		<form action="" method="POST">
            <table align="center">
                <tr>
                    <td rowspan='4' colspan='1'>
						<h4>Planning<h4>
					</td>
                    <td>
                        <label for="id_planning">Id Planning:
                        </label>
                    </td>
                    <td>
						<input type="text" name="id_planning" id="id_planning"  value = "<?php echo $planning['id_planning']; ?>" disabled>
					</td>
				</tr>
				<tr>
					<td>
						<label for="categorie">Categorie:
						</label>
					</td>
					<td>
						<input type="text" name="categorie" id="categorie" maxlength="20" value = "<?php echo $planning['categorie']; ?>">
					</td>
				</tr>
                <tr>
                    <td>
                        <label for="coach">Coach:
                        </label>
                    </td>
                    <td><input type="text" name="coach" id="coach" maxlength="20" value = "<?php echo $planning['coach']; ?>"></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="date_planning">Date_Planning:
                        </label>
                    </td>
                    <td>
                        <input type="date" name="date_planning" id="date_planning" min="2020-12-01" max="2020-12-07" value = "<?php echo $planning['date_planning']; ?>">
                    </td>
                </tr>
                <tr>
                   
                    <td>
                        <label for="heure">Heure:
                        </label>
                    </td>
                    <td>
                        <input type="time" name="heure" id="heure" min="08:00" max="19:00" value = "<?php echo $planning['heure']; ?>">
                    </td>
                </tr>
                
                
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Modifier" name = "modifer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
		<?php
		}
		?>
	</body>
</html>