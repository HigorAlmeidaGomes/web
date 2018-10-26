
/**
 * PROJETO DE EXMPLO USANDO 
 * PADRÃO DE PROJETO STRATEGY
 * 
 * @author Higor Almeida
 *
 */
public class Main {

	public static void main(String args[]) {
		Rh rh = new Rh();

		Gerente gerente = new Gerente();
		gerente.setNome("Joaoziin");
		gerente.setSalario(5900.0);

		Gerente gerente2 = new Gerente();
		gerente2.setNome("Zefa");
		gerente2.setSalario(4900.0);

		Supervisor supervisor = new Supervisor();
		supervisor.setNome("Jose");
		supervisor.setSalario(1500.0);

		rh.calcularSalarioFuncionario(gerente);
		rh.calcularSalarioFuncionario(gerente2);
		rh.calcularSalarioFuncionario(supervisor);
	}
}
