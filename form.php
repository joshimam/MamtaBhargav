<!DOCTYPE html>
<html>
    <head>
        
        <script>
		
				function myChangeFunction(input1) {
				var salary= document.getElementById('salary').value;
				var income1= document.getElementById('income1').value;
				var income2= document.getElementById('income2').value;
				var added = parseInt(salary) + parseInt(income1) + parseInt(income2);
				var added1 = salary + income1 + income2;
				$('#total').val(added);
				}
				
            function generatePDF() {
				var name= document.getElementById('name').value;
				
				var salary= document.getElementById('salary').value;
				
				var income1= document.getElementById('income1').value;
				
				var income2= document.getElementById('income2').value;
				
				var total= document.getElementById('total').value;
                var pdf = new jsPDF({
                    orientation: 'p',
                    unit: 'mm',
                    format: 'a5',
                    putOnlyUsedFonts:true
                    });
                pdf.text(name, 10, 10);
				pdf.text(salary, 10, 20);
				pdf.text(income1, 10, 30);
				pdf.text(income2, 10, 40);
				pdf.text(total, 10, 50);
                //pdf.text("published on APITemplate.io", 20, 30);
                //pdf.addPage();
               // pdf.text(20, 20, 'The second page');
                pdf.save('jsPDF_2Pages.pdf');
            }
        </script>
    </head>
    <body>
	
	
	   <div class="container">
  <h2>Employe Total Salary</h2>
  
		<div class="form-group">
			<label class="sr-only" for="email">Name:</label>
			<input type="name" class="form-control" id="name" placeholder="Enter Name"  name="name">
		</div>
		<div class="form-group">
			<label class="sr-only" for="salary">Salary:</label>
			<input type="salary" class="form-control" id="salary" placeholder="Enter Salary"  name="salary"  value="0" onchange="myChangeFunction(this)">
		</div>
		 <div class="form-group">
			<label class="sr-only" for="income1">Income1:</label>
			<input type="income1" class="form-control" id="income1" placeholder="Enter Income1"  name="income1" value="0" onchange="myChangeFunction(this)">
		</div>
		  <div class="form-group">
			<label class="sr-only" for="income2">Income2:</label>
			<input type="income2" class="form-control" id="income2" placeholder="Enter Income2"  name="income2" value="0" onchange="myChangeFunction(this)">
		</div>
		 <div class="form-group">
			<label class="sr-only" for="income2">Total:</label>
			<input type="total" class="form-control" id="total" placeholder="Enter Total"  name="total">
		</div>
        <button onclick="generatePDF()">Generate PDF</button>
		</div>
		
    </body>
</html>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js"></script>