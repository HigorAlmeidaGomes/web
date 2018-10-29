import javax.swing.JOptionPane;

public class Rh {
	
	public void calcularSalarioFuncionario(Funcionario funcionario){
		String salarioCalculado = funcionario.calcularSalario();
		JOptionPane.showMessageDialog(null, salarioCalculado,"Calculo de Salario", 2);
	}
}
