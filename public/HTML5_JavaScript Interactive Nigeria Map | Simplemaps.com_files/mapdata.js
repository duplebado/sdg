var simplemaps_countrymap_mapdata={
  main_settings: {
    //General settings
		width: "300", //or 'responsive'
    background_color: "#FFFFFF",
    background_transparent: "yes",
    border_color: "#ffffff",
    pop_ups: "detect",
    
		//State defaults
		state_description: "State description",
    state_color: "#88A4BC",
    state_hover_color: "#3B729F",
    state_url: "",
    border_size: 1.5,
    all_states_inactive: "no",
    all_states_zoomable: "yes",
    
		//Location defaults
		location_description: "Location description",
    location_url: "",
    location_color: "#FF0067",
    location_opacity: 0.8,
    location_hover_opacity: 1,
    location_size: 25,
    location_type: "square",
    location_image_source: "frog.png",
    location_border_color: "#FFFFFF",
    location_border: 2,
    location_hover_border: 2.5,
    all_locations_inactive: "no",
    all_locations_hidden: "no",
    
		//Label defaults
		label_color: "#d5ddec",
    label_hover_color: "#d5ddec",
    label_size: 22,
    label_font: "Arial",
    hide_labels: "no",
    hide_eastern_labels: "no",
   
		//Zoom settings
		zoom: "yes",
    manual_zoom: "yes",
    back_image: "no",
    initial_back: "no",
    initial_zoom: "-1",
    initial_zoom_solo: "no",
    region_opacity: 1,
    region_hover_opacity: 0.6,
    zoom_out_incrementally: "yes",
    zoom_percentage: 0.99,
    zoom_time: 0.5,
    
		//Popup settings
		popup_color: "white",
    popup_opacity: 0.9,
    popup_shadow: 1,
    popup_corners: 5,
    popup_font: "12px/1.5 Verdana, Arial, Helvetica, sans-serif",
    popup_nocss: "no",
    
		//Advanced settings
		div: "map",
    auto_load: "yes",
    url_new_tab: "no",
    images_directory: "default",
    fade_time: 0.1,
    link_text: "View Website"
  },
  state_specific: {
    NGA2839: {
      name: "Borno",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "default"
    },
    NGA2841: {
      name: "Abia",
      description: "Capital: Umuahia",
      color: "red",
      hover_color: "blue",
      url: "/state/abia"
    },
    NGA2842: {
      name: "Akwa Ibom",
      url: "/state/akwa-ibom"
    },
    NGA2843: {
      name: "Imo",
      url: "/state/imo"
    },
    NGA2844: {
      name: "Rivers",
      url: "/state/rivers"
    },
    NGA2845: {
      name: "Bayelsa",
      url: "/state/bayelsa"
    },
    NGA2846: {
      name: "Benue",
      url: "/state/benue"
    },
    NGA2847: {
      name: "Cross River",
      url: "/state/cross-river"
    },
    NGA2848: {
      name: "Taraba",
      url: "/state/taraba"
    },
    NGA2849: {
      name: "Kwara",
      url: "/state/kwara"
    },
    NGA2850: {
      name: "Lagos",
      url: "/state/lagos"
    },
    NGA2851: {
      name: "Niger",
      url: "/state/niger"
    },
    NGA2852: {
      name: "Ogun",
      url: "/state/ogun"
    },
    NGA2853: {
      name: "Ondo",
      url: "/state/ondo"
    },
    NGA2854: {
      name: "Ekiti",
      url: "/state/ekiti"
    },
    NGA2855: {
      name: "Osun",
      url: "/state/osun"
    },
    NGA2856: {
      name: "Oyo",
      url: "/state/oyo"
    },
    NGA2857: {
      name: "Anambra",
      url: "/state/anambra"
    },
    NGA2858: {
      name: "Bauchi",
      url: "/state/bauchi"
    },
    NGA2859: {
      name: "Gombe",
      url: "/state/gombe"
    },
    NGA2860: {
      name: "Delta",
      url: "/state/delta"
    },
    NGA2861: {
      name: "Edo",
      url: "/state/edo"
    },
    NGA2862: {
      name: "Enugu",
      url: "/state/enugu"
    },
    NGA2863: {
      name: "Ebonyi",
      url: "/state/ebonyi"
    },
    NGA2864: {
      name: "Kaduna",
      url: "/state/kaduna"
    },
    NGA2865: {
      name: "Kogi",
      url: "/state/kogi"
    },
    NGA2866: {
      name: "Plateau",
      url: "/state/plateau"
    },
    NGA2867: {
      name: "Nassarawa",
      url: "/state/nassarawa"
    },
    NGA2868: {
      name: "Jigawa",
      url: "/state/jigawa"
    },
    NGA2869: {
      name: "Kano",
      url: "/state/kano"
    },
    NGA2870: {
      name: "Katsina",
      url: "/state/katsina"
    },
    NGA2871: {
      name: "Sokoto",
      url: "/state/sokoto"
    },
    NGA2872: {
      name: "Zamfara",
      url: "/state/zamfara"
    },
    NGA2873: {
      name: "Yobe",
      url: "/state/yobe"
    },
    NGA2879: {
      name: "Kebbi",
      url: "/state/kebbi"
    },
    NGA2881: {
      name: "Adamawa",
      url: "/state/adamawa"
    },
    NGA3470: {
      name: "Federal Capital Territory",
      url: "/state/abuja"
    }
  },
  locations: {
    // "0": {
    //   lat: "9.083333",
    //   lng: "7.533333",
    //   name: "Abuja"
    // }
  }
};