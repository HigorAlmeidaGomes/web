import java.text.DecimalFormat;

public class Gerente implements Funcionario{
	private String nome;
	private Double salario;
	
	public String calcularSalario() {
		Double salarioTotal = salario + (salario *  0.2);
		return "Salario do "+nome+": "+ DecimalFormat.getCurrencyInstance().format(salarioTotal);
	}
	
	public String getNome() {
		return nome;
	}
	
	public void setNome(String nome) {
		this.nome = nome;
	}
	public Double getSalario() {
		return salario;
	}
	public void setSalario(Double salario) {
		this.salario = salario;
	}
}
