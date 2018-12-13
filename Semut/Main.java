import Ants.TravelingSalesman;

import java.util.Scanner;

public class Main {

    public static void main(String[] args) {
		System.out.println("------------------ANT COLONY OPTIMIZATION------------------");
		
	
		
		
		final long startTime = System.currentTimeMillis();
		Scanner sc=new Scanner(System.in);
		String lok[]={"small1.csv","small2.csv","medium1.csv","medium2.csv","big1.csv","big2.csv"};
		
		int i=sc.nextInt();
			
			
				System.out.println("Data : "+lok[i]+"\n\n");
		   
/*
			 int ants    = 100;          // Number of ants to run per generation.
            int gen     = 100;          // Number of generations.
            double evap = 0.1;          // Evaporation rate of pheromones.
            int alpha   = 1;            // Impact of pheromones on decision making.
            int beta    = 5;            // Impact of distance on decision making.
*/
				int ants    = 80;         
				int gen     = 200;          
				double evap = 0.08;         
				int alpha   = 8;            
				int beta    = 11;   

				
				String lokasi=lok[i];
				TravelingSalesman travelingSalesman = new TravelingSalesman(ants, gen, evap, alpha, beta, lokasi);
				
					travelingSalesman.run();
					
			final long endTime = System.currentTimeMillis();

				System.out.println("Total execution time: " + (endTime - startTime));
				
				
				
			}
			
		
		
		
	



}
