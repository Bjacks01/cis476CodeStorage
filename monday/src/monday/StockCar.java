package monday;

public class StockCar implements Runnable {
	private int num;

	public StockCar(int num) {
		this.num = num;
	}

	public void run() {
		for (int i = 0; i < 10; i++) {
			System.out.print("" + num + ": " + i);
			if (i == 9) {
				System.out.println(" FINISHED");
			} else {
				System.out.println();
			}
		}
	}
}
