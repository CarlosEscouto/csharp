using Model.Entity;
using System;

namespace Model.DAO.Configuracao
{
    public class Configuracoes
    {
        public string LeStringConexao()
        {
            string strConexao = null;
            try
            {
                /*String BRUNA*/
                //strConexao = "Data Source=(localdb)\\v11.0;Database=SMARTDB;Integrated Security=True;Connect Timeout=30;Encrypt=False;TrustServerCertificate=False;";
                /*String CARLOS*/
                //strConexao = "Data Source = (LocalDB)\\MSSQLLocalDB; Initial Catalog = smartdb; Integrated Security = True; Connect Timeout = 30; Encrypt = False; TrustServerCertificate = True; ApplicationIntent = ReadWrite; MultiSubnetFailover = False";
                /*String online*/
                strConexao = "Data Source=tcp:integriert.database.windows.net,1433;Initial Catalog=smartdb;User ID=smartup;Password=Pimzao2017";
                                                    
            }
            // Pra que? \/ nunca vai cair nessa condição
            catch(Exception ex)
            {
                strConexao = null;
            }
            return strConexao;
        }
    }
}
