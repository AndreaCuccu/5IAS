<html>
	<head>
		<title>Esercizio di conto</title>
	</head>
	<body>
		<h1>Benvenuto</h1>
		
		<%! Integer cont; %>
		<%
		if(session.isNew()){
			session.putValue("contatore", 1);
			cont =new Integer(1);
		}else{
			cont =(Integer)session.getValue("contatore");
			session.putValue("contatore", new Integer(cont.intValue()+1));
		}
		%>
	 
	<p>Volte che si è fatto l'accesso n* <%= cont.intValue() %></p><br>
	</body>
</html>
