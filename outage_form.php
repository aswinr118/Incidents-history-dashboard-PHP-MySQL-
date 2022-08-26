<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Incident form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 550px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Title - Outage Form</h2>
                    </div>
                    <p>Please fill this form in prescribed format and submit to add outage details to the database. Add URL's in double quotes for hyperlinking.</p>
                    <form action="insert.php" method="post">
                        <div class="form-group">
                            <label>Date (format eg: YYYY-MM-DD):</label>
                            <input type="text" name="date" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Problem Ticket no:</label>
                            <input type="text" name="problem" class="form-control">
			</div>
                        <div class="form-group">
                            <label>Incident Ticket no:</label>
			    <input type="text" name="incident" class="form-control">
			</div>
			<div class="form-group">
                            <label>Team name:</label>
                            <input type="text" name="team" class="form-control">
			</div>
			<div class="form-group">
                            <label>MTTD (format eg: 1mins):</label>
                            <input type="text" name="mttd" class="form-control">
			</div>
			<div class="form-group">
                            <label>MTTR (format eg: 5mins):</label>
                            <input type="text" name="mttr" class="form-control">
			</div>
			<div class="form-group">
                            <label>Category:</label>
                            <input type="text" name="category" class="form-control">
			</div>
			<div class="form-group">
                            <label>MTIS (format eg: 1mins):</label>
                            <input type="text" name="mtis" class="form-control">
                        </div>
			<div class="form-group">
                            <label>MTJC (format eg: 1mins):</label>
                            <input type="text" name="mtjc" class="form-control">
                        </div>	
			<div class="form-group">
                            <label>MTII (format eg: 1mins):</label>
                            <input type="text" name="mtii" class="form-control">
			</div>
			<div class="form-group">
                            <label>MTFI (format eg: 1mins):</label>
                            <input type="text" name="mtfi" class="form-control">
			</div>

			<div class="form-group">
                            <label>Incident URL (format eg: "https://abc.com"):</label>
                            <input type="text" name="inc_url" class="form-control">
			</div>

			<div class="form-group">
                            <label>Problem URL (format eg: "https://abc.com"):</label>
                            <input type="text" name="prb_url" class="form-control">
                        </div>
			
			<div class="form-group">
                            <label>Problem RCA Status (eg: Open/Close"):</label>
                            <input type="text" name="status" class="form-control">
                        </div>
			
			<div class="form-group">
                            <label>Description:</label>
                            <input type="text" name="description" class="form-control">
                        </div>	


                       <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
