<!DOCTYPE html>
<html>
<?php include("head.php") ?>
<body>

	<?php include("header.php") ?>

	<div class="container mt-5 ">
	  <div class="row ">
	  	<?php include("left-sidebar.php") ?>
	    <div class=" main-content col-sm-8">
	    	

	    	<!-- JS Calculator -->
	    	<div class="row js-calculator ">
				<div class="row mb-5">
					<span><a href="index.php"><h5>Back...</h5></a></span>
				<h1 class="text-center">Basic JS Calculator</h1>
				<h5 class="text-center">Add, Multiply, Subtract, Divide</h5>
					
				</div>
	    		<form class="row subcontent" action="" onsubmit="calculate()" name="calc">
	    			<label class="col-5">Enter Number</label>
	    			<label class="col-2">Operator</label>
	    			<label class="col-5">Enter Number</label>
	    			<input class="col-5" type="number" id="n1" placeholder="Enter a number">
    				<input class="col-2" type="text" id="operator" placeholder="+ - * /">
    				<input class="col-5" type="number" id="n2" placeholder="Enter a number">
				   <button type="submit" class="btn btn-default mt-3">Submit</button>
				</form>
	    		<script type="text/javascript">
	    			function calculate(){
						var result;

						var optr = document.getElementById("operator");
						var operator= optr.value;

						var n1 = document.getElementById("n1");
						var number1 = parseInt(n1.value);
						var n2 = document.getElementById("n2");
						var number2 = parseInt(n2.value);
						function sum(){
				         result = number1 + number2;
		         		 alert("Answer is "+result);
				     	}
						function sub(){
				         result = number1 - number2;
         		 		 alert("Answer value is "+result);
				     	}
						function multiply(){
				         result = number1 * number2;
         		 		 alert("Answer is "+result);
				     	}
						function divide(){
				         result = number1 / number2;
         		 		 alert("Answer is "+result);
				     	}

						switch(operator) {
						    case '+':
						         sum();
						        break;

						    case '-':
						         sub();
						        break;

						    case '*':
						    	multiply();
						        break;

						    case '/':

						    	divide();
						        break;

						    default:
						        alert('Invalid operator');
						        break;
						}
					}
	    		</script>
		    </div>
		</div>
	  </div>
	</div>
	<?php include("footer.php") ?>
</body>
</html>