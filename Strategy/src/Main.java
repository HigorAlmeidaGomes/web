import javax.swing.JOptionPane;

/**
 * PROJETO DE EXMPLO USANDO PADRÃO DE PROJETO STRATEGY
 * 
 * @author Higor Almeida Gomes
 *
 */
public class Main {

	public static void main(String args[]) {
		Rh rh = new Rh();
		String entrada;
		Double salario;
		entrada = JOptionPane.showInputDialog("Digite o seu nome");
		Gerente gerente = new Gerente();
		gerente.setNome(entrada);
		entrada = JOptionPane.showInputDialog("Digite o Salário");
		salario = Double.parseDouble(entrada);
		gerente.setSalario(salario);

		Gerente gerente2 = new Gerente();
		entrada = JOptionPane.showInputDialog("Digite o Seu Nome: ");
		gerente2.setNome(entrada);
		entrada = JOptionPane.showInputDialog("Digite o seu Salario");
		salario = Double.parseDouble(entrada);
		gerente2.setSalario(salario);

		Supervisor supervisor = new Supervisor();
		entrada = JOptionPane.showInputDialog("Digite o seu Nome");
		supervisor.setNome(entrada);
		entrada = JOptionPane.showInputDialog("Digite o seu salario");
		salario = Double.parseDouble(entrada);
		supervisor.setSalario(salario);

		rh.calcularSalarioFuncionario(gerente);
		rh.calcularSalarioFuncionario(gerente2);
		rh.calcularSalarioFuncionario(supervisor);
	}
}
