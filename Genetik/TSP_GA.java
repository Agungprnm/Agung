/*
* TSP_GA.java
* Create a tour and evolve a solution
*/

 import java.io.File;
 import java.io.FileNotFoundException;
 import java.util.*;

public class TSP_GA {

    public static void main(String[] args) {
		final long startTime = System.currentTimeMillis();
		Scanner sc=new Scanner(System.in);
		String lok[]={"small1.csv","small2.csv","medium1.csv","medium2.csv","big1.csv","big2.csv"};
		
		int i=sc.nextInt();
		

				String direktori= "C:\\Users\\nyoman\\Desktop\\OKH\\datasets\\"+lok[i];
				File file = new File(direktori); // TODO: read about File Names
				System.out.println("data  : "+lok[i]);
			
			try {
				TourManager.destinationCities.clear();
				Scanner inputStream = new Scanner(file);
				
				int jumlahCity=inputStream.nextInt();
				
				City city[]=new City[jumlahCity];
				
				
				int  index=0;
				while (inputStream.hasNext()){
					String ci=inputStream.next();
					String splitCity[]= ci.split(",");
			   
					city[index]=new City(Integer.parseInt(splitCity[0]),Integer.parseInt(splitCity[1]));
				
					
					TourManager.addCity(city[index]);
					index++;
				}
				inputStream.close();
				
				
				

				// Initialize population
				Population pop = new Population(510, true);
				System.out.println("Initial distance: " + pop.getFittest().getDistance());

				// Evolve population for 100 generations
				pop = GA.evolvePopulation(pop);
				for (int k = 0; k < 1500; k++) {
					pop = GA.evolvePopulation(pop);
				}

				// Print final results
				
				System.out.println("Finished");
				System.out.println("Final distance: " + pop.getFittest().getDistance());
				System.out.println("Solution:");
				System.out.println(pop.getFittest()+"\n\n\n");
				
				
			
			
				} catch (FileNotFoundException e) {
					// TODO Auto-generated catch block
					e.printStackTrace();
				}
				
				final long endTime = System.currentTimeMillis();

				System.out.println("Total execution time: " + (endTime - startTime));
			
    }
}