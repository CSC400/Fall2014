var testuser = {
"userid" :   // this will be a generated field. Maybe have different types of user ids for scsu user and vendor user.
"type" : "scsu", //Can be either scsu or vend. Use this to differentiate user type
"email" : "abcd@gmail.com",
"password" : "abcdefg", //need to look into some sort of hashing
"rfps" : "[rfpnum1], [rfpnum2]",
"responses" : "[responsenum1,repsonsenum2]"
}
var testrfp = {
“rfpnum” : “”, //put code to generate number here
"userid" : //coming from the user that made the RFP
“contact" : “John Doe”,
“phonenum” : “1234567890”,
“email” : “abcd@abcd.com”,
“address” : “1111 Main Street”,
“purpose” : “Hands On” //Unsure of what possible values are
“podiumtype” : “Mac”,
“projection” : “Ceiling Mounted”,
“hqaudio” : true,
“classnum” : 1,
“seats” : 30,
“size” : {“length” : 10, “width” : 10, “height” : 10},
“stadium” : false,
“budget” : 10000,
“compdate” : new Date()
"repsonses" : "[reponsenum1, repsonsenum2]"
}

var testresponce = {
"responsenum" : " " //generated code
“userid” : “”, //coming from user who made the repsonse
“contact” : “John Doe”,
“phonenum” : “1234567890”,
“email” : “abcd@abcd.com”,
“StreetAddress” : “123 Candy Lane”,
“City”: “New Haven”,
“State” : “CT” or “Connecticut”, //Kind of up to the form people.
“Zip” :  “06460”,
“Vendortype” :  [“Projectors”,”Video Displays”,”Desks”], //I was thinking for like what the vendors sells….
“associatedrfp” : "rfpnum",
“VendorPartners” : ["string", "string2"],
}