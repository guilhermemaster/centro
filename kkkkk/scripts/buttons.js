// JavaScript Document
(function(){
	
	document.getElementById("button1").onclick=function(){
		var mainContent = document.getElementById("mainContent");
		mainContent.innerHTML="<object type='text/html' data='home.php' width='800' ></object>";
		
	};
	
	document.getElementById("button2").onclick=function(){
		var mainContent = document.getElementById("mainContent");
		mainContent.innerHTML="<object type='text/html' data='confiracoes.php' width='800' height='400' ></object>";
		
	};
	document.getElementById("button3").onclick=function(){
		var mainContent = document.getElementById("mainContent");
		mainContent.innerHTML="<object type='text/html' data='paginas/editarhome.php' width='800' height='400' ></object>";
		
	};
		document.getElementById("button4").onclick=function(){
		var mainContent = document.getElementById("mainContent");
		mainContent.innerHTML="<object type='text/html' data='paginas/addnovidades.php' width='800' height='400' ></object>";
		
	};
	
	document.getElementById("button5").onclick=function(){
		var mainContent = document.getElementById("mainContent");
		mainContent.innerHTML="<object type='text/html' data='paginas/removernovidades.php' width='800' height='400' ></object>";
		
	};
	
	document.getElementById("button6").onclick=function(){
		var mainContent = document.getElementById("mainContent");
		mainContent.innerHTML="<object type='text/html' data='paginas/addpalestra.php' width='800' height='400' ></object>";
		
	};
	
	document.getElementById("button7").onclick=function(){
		var mainContent = document.getElementById("mainContent");
		mainContent.innerHTML="<object type='text/html' data='paginas/removerpalestras.php' width='800' height='400' ></object>";
		
	};
	
		document.getElementById("button8").onclick=function(){
		var mainContent = document.getElementById("mainContent");
		mainContent.innerHTML="<object type='text/html' data='paginas/addprogramacao.php' width='800' height='400' ></object>";
		
	};
	document.getElementById("button9").onclick=function(){
		var mainContent = document.getElementById("mainContent");
		mainContent.innerHTML="<object type='text/html' data='paginas/removerprogramacao.php' width='800' height='400' ></object>";
		
	};
	
	
})();