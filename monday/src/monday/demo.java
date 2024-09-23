package monday;

public class demo {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Runnable jr = new StockCar(88);
		Runnable henry = new StockCar(22);
		Runnable brady = new StockCar(12);
		
		Thread thread1 = new Thread(jr);
		Thread thread2 = new Thread(henry);
		Thread thread3 = new Thread(brady);
		
		thread1.start();
		thread2.start();
		thread3.start();

	}

}
