//Tableau Embed function
function initViz() {
  url = "https://clientreporting.theinformationlab.co.uk/t/PublicDemo/views/Superstoreforembeded/MonthlySales",
  options = {
      hideToolbar: true,
      width: "100%",
      height: "200px",
  };
  viz = new tableau.Viz(tabMonthlySales, url, options);
}
