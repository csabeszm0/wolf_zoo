using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Data;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Imaging;
using System.Windows.Navigation;
using System.Windows.Shapes;
using System.IO;

namespace Vadaspark
{
    /// <summary>
    /// Interaction logic for MainWindow.xaml
    /// </summary>
    public partial class MainWindow : Window
    {
        public MainWindow()
        {
            InitializeComponent();

        }

        private void add_Click(object sender, RoutedEventArgs e)
        {
            StreamWriter sw = new StreamWriter("nyilvantartas.txt", true);
            

            sw.WriteLine($"{name.Text}, {type.Text}, {male.IsChecked}, {female.IsChecked}, {date.SelectedDate}, {from.Text}, {eating.Text}, {color.Text}");
            MessageBox.Show("Adatok hozzá lettek adva a listához.");

            if (name.Text == "" || type.Text == "" || date.SelectedDate == null || from.Text == "" || eating.Text == "" || color.Text == "")
            {
                MessageBox.Show("Nem adta meg a teljes információkat!");
            }
            
                    
            sw.Flush();
            sw.Close();
        }

        private void exit_Click(object sender, RoutedEventArgs e)
        {
            Close();
        }


        private void load_Click(object sender, RoutedEventArgs e)
        {
            /*
           StreamWriter sw = new StreamWriter("nyilvantartas.txt");

           foreach (var item in arrive.Items)
           {
               sw.WriteLine(item.ToString());
           }
           sw.Flush();
           sw.Close();

           MessageBox.Show("Az érkező állatok nyilvántartását a nyilvantartas.txt fájlba írtam!");
           */

            arrive.Items.Clear();

            foreach (var item in File.ReadAllLines("nyilvantartas.txt"))
            {
                arrive.Items.Add(item);
            }
        }

        private void delete_Click(object sender, RoutedEventArgs e)
        {
            arrive.Items.Remove(arrive.SelectedItem);

            StreamReader sr = new StreamReader("nyilvantartas.txt");

            foreach (var item in arrive.Items)
            {
               
            }
        }
    }
}
