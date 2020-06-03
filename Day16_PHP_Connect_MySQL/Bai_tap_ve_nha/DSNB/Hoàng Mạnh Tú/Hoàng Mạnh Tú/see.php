<?php
    require_once ("select_one.php");
?>
<div class="container">
    <div class="row col-sm-6 ">
        <div class="form-group">
            <label>Id :</label>
            <input type="text" class="form-control"  value="<?php echo isset($employees["id"]) ? $employees["id"]: '' ;?>">
        </div>
        <div class="form-group">
            <label>Name : </label>
            <input type="text" class="form-control"  value="<?php echo isset($employees["name"]) ? $employees["name"]: '' ;?>">
        </div>
        <div class="form-group">
            <label >Description : </label>
            <textarea class="form-control" > <?php echo isset($employees["description"]) ? $employees["description"]: '' ;?> </textarea>
        </div>
        <div class="form-group">
            <label >Salary : </label>
            <input type="text" class="form-control" value="<?php echo isset($employees["salary"]) ? $employees["salary"]: '' ;?>">
        </div>
        <div class="form-group">
            <label >Gender : </label>
            <br>
            <?php
            $gender="";
            $gender1="";
            if(isset($employees["gender"])) {
                switch ($employees["gender"]) {
                    case 0:
                        $gender = "checked";
                        break;
                    case 1:
                        $gender1 = "checked";
                        break;
                }
            }
            ?>
            <input type="radio"  name="gender" value="1" <?php echo $gender1; ?> > Male
            <input type="radio"  name="gender" value="0" <?php echo $gender; ?> > Female
        </div>
        <div class="form-group">
            <label >Birthday : </label>
            <input type="text"  class="form-control" value="<?php echo isset($employees["birthday"]) ? (date("m-d-y",strtotime($employees["birthday"]))) : '' ; ?>">
        </div>
        <div class="form-group">
            <label >Created_at : </label>
            <input type="text" class="form-control" value="<?php echo isset($employees["created_at"]) ? (date("m-d-y h:i:s",strtotime($employees["created_at"]))) : '' ; ?>">
        </div>

        <a href="list.php" class="btn btn-primary">Back</a>
    </div>
</div>

