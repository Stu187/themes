var app = angular.module( 'csGrid', []);

app.controller( 'mainController', ['$scope', function($scope) {
  $scope.socs = [
    {
      "name"  : "AIA Buddy Program",
      "logo"  : "aiabp.png",
      "link"  : "",
      "lines" : "two-line"
    },
    {
      "name"  : "UNE Archaeological Society",
      "logo"  : "uneas.png",
      "link"  : "http://www.facebook.com/groups/UNEarchaeologysociety/",
      "lines" : "three-line"
    },
    {
      "name"  : "Aspire",
      "logo"  : "aspire.png",
      "link"  : "http://www.unemsa.org/aspire",
      "lines" : "one-line"
    },
    {
      "name"  : "AYCC (Australian Youth Climate Coalition)",
      "logo"  : "aycc.png",
      "link"  : "http://www.facebook.com/ayccnew",
      "lines" : "four-line"
    },
    {
      "name"  : "Bhutanese Student Association",
      "logo"  : "no-logo.png",
      "link"  : "mailto:dkinzang@myune.edu.au",
      "lines" : "three-line"
    },
    {
      "name"  : "CSSA (Chinese Student & Scholar Association)",
      "logo"  : "cssa.png",
      "link"  : "mailto:cssaarmidale@gmail.com",
      "lines" : "four-line"
    },
    {
      "name"  : "Enactus",
      "logo"  : "enactus.png",
      "link"  : "http://www.enactusune.org",
      "lines" : "one-line"
    },
    {
      "name"  : "Farming Futures",
      "logo"  : "ffutures.png",
      "link"  : "mailto:cgowen@myune.edu.au",
      "lines" : "two-line"
    },
    {
      "name"  : "Gender and Sexuality Minorities Alliance",
      "logo"  : "gsma.jpg",
      "link"  : "http://gsmaarmidale.blogspot.com.au/",
      "lines" : "four-line"
    },
    {
      "name"  : "Indigenous Students Association",
      "logo"  : "no-logo.png",
      "link"  : "mailto:mkirk3@une.edu.au",
      "lines" : "three-line"
    },
    {
      "name"  : "International Students Association",
      "logo"  : "isa.png",
      "link"  : "mailto:une.isa@une.edu.au",
      "lines" : "three-line"
    },
    {
      "name"  : "Komunitas Indonesia Australia Armidale",
      "logo"  : "kiaa.jpg",
      "link"  : "mailto:cgunawan@myune.edu.au",
      "lines" : "four-line"
    },
    {
      "name"  : "Libyan Society",
      "logo"  : "no-logo.png",
      "link"  : "",
      "lines" : "one-line"
    },
    {
      "name"  : "Minimbah Project",
      "logo"  : "tmp.png",
      "link"  : "",
      "lines" : "two-line"
    },
    {
      "name"  : "Mature Students Association",
      "logo"  : "msa.png",
      "link"  : "http://www.facebook.com/pages/Mature-Students-Association-UNE",
      "lines" : "three-line"
    },
    {
      "name"  : "Mums@UNE",
      "logo"  : "mums.png",
      "link"  : "http://www.facebook.com/mum.une.5",
      "lines" : "one-line"
    },
    {
      "name"  : "UNE Music Students Association",
      "logo"  : "musa.png",
      "link"  : "http://www.facebook.com/groups/690362927645119/",
      "lines" : "three-line"
    },
    {
      "name"  : "New England Rural Club for Health Alliance",
      "logo"  : "nercha.png",
      "link"  : "https://nercha.nrhsn.org.au/",
      "lines" : "four-line"
    },
    {
      "name"  : "PhUNE (Pharmacy)",
      "logo"  : "phune.jpg",
      "link"  : "mailto:kpollar2@myune.edu.au",
      "lines" : "two-line"
    },
    {
      "name"  : "UNE Rural Science Undergraduate Society",
      "logo"  : "rsus.jpg",
      "link"  : "",
      "lines" : "four-line"
    },
    {
      "name"  : "Saudi Students Club in Armidale",
      "logo"  : "saudi.png",
      "link"  : "mailto:aalanaz4@myune.edu.au",
      "lines" : "three-line"
    },
    {
      "name"  : "Students for Christ",
      "logo"  : "sfc.png",
      "link"  : "http://www.sfc.aog.asn.au/",
      "lines" : "two-line"
    },
    {
      "name"  : "Townies",
      "logo"  : "townies.png",
      "link"  : "http://blog.une.edu.au/unetownies/",
      "lines" : "one-line"
    },
    {
      "name"  : "UNEEBS",
      "logo"  : "uneebs.jpg",
      "link"  : "mailto:aduver@myune.edu.au",
      "lines" : "one-line"
    },
    {
      "name"  : "UNE Engineering Society",
      "logo"  : "unees.jpg",
      "link"  : "mailto:klhoad@hotmail.com",
      "lines" : "three-line"
    },
    {
      "name"  : "UNE Law Students Society",
      "logo"  : "lss.png",
      "link"  : "http://unelss.org/",
      "lines" : "three-line"
    },
    {
      "name"  : "UNE Medical Students Association",
      "logo"  : "unemsa.png",
      "link"  : "http://www.unemsa.org/",
      "lines" : "three-line"
    },
    {
      "name"  : "UNENTAS",
      "logo"  : "unentas.jpg",
      "link"  : "mailto:mwilli34@hotmail.com",
      "lines" : "one-line"
    },
    {
      "name"  : "UNE Surgical Society",
      "logo"  : "uness.jpg",
      "link"  : "mailto:mgrigg@myune.edu.au",
      "lines" : "two-line"
    },
    {
      "name"  : "UNE Women's Society",
      "logo"  : "unews.png",
      "link"  : "http://www.facebook.com/groups/359740764124471/",
      "lines" : "two-line"
    },
    {
      "name"  : "Zoology Society of UNE",
      "logo"  : "zoology.png",
      "link"  : "http://blog.une.edu.au/zoologysociety/",
      "lines" : "two-line"
    }
    // {
    //   "name"  : "",
    //   "logo"  : "",
    //   "link"  : "",
    //   "lines" : "-line"
    // },
  ];


}]);
