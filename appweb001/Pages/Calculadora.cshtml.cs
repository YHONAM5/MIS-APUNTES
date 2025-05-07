using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;
using Microsoft.AspNetCore.SignalR;

namespace MyApp.Namespace
{
    public class CalculadoraModel : PageModel
    {
        [BindProperty]
        public int? N1{ get; set; }

        [BindProperty]
        public int? N2{ get; set;}
        public int? Res{ get; set;}
        public void OnPost()
        {
            Res = N1+N2;
        }
    }
}
