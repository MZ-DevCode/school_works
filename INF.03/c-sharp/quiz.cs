using System;

class HelloWorld 
{
    static void Main() 
    {
        Console.WriteLine("Квиз\n");
        int score = 0;
        int total = 3;

        Console.Write("Столица Польши: ");
        string answer1 = Console.ReadLine().ToLower().Trim();
        
        if (answer1 == "варшава") {
            Console.WriteLine("Правильно\n");
            score++;
        } else {
            Console.WriteLine("Неправильно\n");
        }
        
        Console.Write("2 + 2: ");
        int answer2 = Convert.ToInt32(Console.ReadLine().Trim());

        if (answer2 != 4) {
            Console.WriteLine("Неправильно\n");
            
        } else {
            Console.WriteLine("Правильно\n");
            score++;
        }
        
        Console.Write("Море над Польшей: ");
        string answer3 = Console.ReadLine().ToLower().Trim();
        
        if (answer3 == "балтийское") {
            Console.WriteLine("Правильно\n");
            score++;
        } else {
            Console.WriteLine("Неправильно\n");
        }
        
        double percent = ((double)score / total) * 100;
        
        Console.WriteLine($"Игра окончена");
        Console.WriteLine($"Набрано очков: {score} из {total}");
        Console.WriteLine($"Результат: {percent:F1}%");
    }
}
