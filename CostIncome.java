import java.util.Scanner;

public class CostsEfficiency {
        public static void main(String[] args) {
            Scanner scan = new Scanner(System.in);
            System.out.print("Enter number of projects: \n");
            int n;
            n = scan.nextInt();
            int dohod[] = new int[n];
            System.out.print("Enter expected income of the each project:\n");
            for(int i=0; i<dohod.length;i++){
                dohod[i] = scan.nextInt();
            }
            System.out.println("Filled massive of incomes: ");

            for(int i=0; i<dohod.length;i++){
                System.out.print("value" + dohod[i] + "\n");
            }
            int zatrati[] = new int[n];
            System.out.print("Enter expected costs of the each project: \n");
            for(int i=0; i<zatrati.length;i++){
                zatrati[i] = scan.nextInt();
            }
            System.out.println("Filled massive of costs:");

            for(int i=0; i<zatrati.length;i++){
                System.out.print("value " + zatrati[i] + "\n");
            }
            int result[] = new int[n];
            System.out.println("Value of efficiency of the each project: \n");
            for(int i=0; i<result.length;i++){
                System.out.print("value " + dohod[i]/zatrati[i] + "\n");
            }

        }
    }
