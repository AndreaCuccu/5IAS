package cuccu;


import java.io.*;
import javax.servlet.*;
import javax.servlet.http.*;

public class contatore extends HttpServlet {

    public void doGet(HttpServletRequest request, HttpServletResponse response)
    throws IOException, ServletException
    {
		Integer cont;
		HttpSession session = request.getSession();
		PrintWriter out = response.getWriter();
		
		if(session.isNew()){

			session.putValue("contatore", 1);

			cont =new Integer(1);

		}else{

			cont =(Integer)session.getValue("contatore");

			session.putValue("contatore", new Integer(cont.intValue()+1));
			
			
    }
	out.println("Volte che si è fatto l'accesso n: "+cont);
	}
}