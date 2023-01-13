
@extends('../layout/' . $layout)
@section('subhead')
    <title>New Branch</title>
@endsection
@section('subcontent')
<!DOCTYPE html>



{{-- https://developers.facebook.com/docs/whatsapp/business-management-api/qr-codes --}}

  <script type="text/javascript" src="https://unpkg.com/qr-code-styling/lib/qr-code-styling.js"></script>

  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

 <style>

#header{
  width: 100%;
  height: 10%;
  display: flex;
  justify-content: center;
  align-items: center;
  box-shadow: 2px 4px 4px rgba(0, 0, 0, 0.09);
}

#content{
  width: 80%;
  margin-top: 4%;
  display: flex;
  justify-content: space-evenly;
}

.inputContainer{ margin-top: 5%; display: flex; flex-direction: column;}

#formButton{
  margin-top: 5%;
  background-color: rgb(250, 250, 250);
  border: 0.5px solid grey;
  border-radius: 8px;
  box-shadow: 2px 4px 4px rgba(0, 0, 0, 0.09);
  padding-left: 20px;
  padding-right: 20px;
  padding-top: 10px;
  padding-bottom: 10px;
  }

 </style>

</head>

<body>



<section id="content">

  <div>
<table>
    <tr>
        <td>
    <form id="qrForm" onsubmit="return false;">
        <div class="intro-y box p-8">
        <div class="inputContainer">
            <label for="typeInput">Media</label>
            <select name="Media" id="dataInput" onchange="updateQrData();">

                <option value="wa.me">Whatsapp</option>

                <option value="Telegram">Telegram</option>


              </select>


            <label for="dataInput">Phone Number</label>
            <input type="NUMBER" onchange="updateQrPhone();" name="dataInput" id="Phone" placeholder="XXXXXXXXXX" required />


            <label for="dataInput">Message Content</label>
            <textarea class="text" onchange="updateQrblank();" name="dataInput" rows="8" id="blank" placeholder=" " required >
            </textarea>
          </div>

          <div class="inputContainer">

            <label for="imageInput">Image</label>

            <input type="file" onchange="updateQrImg();" name="imageInput" id="imageInput" accept="image/*"  />

          </div>

          <div class="inputContainer">

            <label for="colorInput">Color</label>

            <input type="color" onchange="updateQrColor();" name="colorInput" id="colorInput" />

          </div>

          <div class="inputContainer">

            <label for="typeInput">Type</label>

            <select name="typeInput" id="typeInput" onchange="updateQrType();">

              <option value="square">Square</option>

              <option value="rounded">Rounded</option>

              <option value="dots">Dots</option>

            </select>

          </div>
          <center><button type="button" class="btn btn-primary w-40 mt-6">GENARATE QR</button></center>

    </form>



  </div>

</td>
</div>
<td>
    <div class="intro-y box p-8">
  <div id="canvas"></div>

</section>

<script type="text/javascript">
qrData = document.getElementById('dataInput');
qrPhone = document.getElementById('Phone');


qrblank = document.getElementById('blank');
qrImage = document.getElementById('imageInput');
qrColor = document.getElementById('colorInput');
qrType = document.getElementById('typeInput');

const qrCode = new QRCodeStyling({
  width: 300,
  height: 300,
  data: "Please enter the data and then try to scan me.",
  image: "",
  dotsOptions: {
    color: "#000",
    type: "square"
  },
});

const updateQrData = () => {
  newQrData = qrData.value;
  qrCode.update({
    data: newQrData
  });
};
const updateQrPhone = () => {
  newQrData = qrData.value+qrPhone.value;
  qrCode.update({
    data: newQrData
  });
};

//QRmsg=qrblank.value;
// const updateQrblank = () => {
//   newQrData = "Media:"+qrData.value+"   "+"Phone:"+qrPhone.value+"   "+"Messagesssss:"+qrblank.value;
//   qrCode.update({
//     data: newQrData
//   });
// };
const updateQrblank = () => {
  QRmsg=qrblank.value;
  QRContent=QRmsg.replace(/ /g,'%20');
  // decodeURI(QRmsg)

  newQrData = "https://"+qrData.value+"/94"+qrPhone.value+"?text="+QRContent;
  qrCode.update({
    data: newQrData
  });
};



const updateQrImg = () => {
  newQrImage = URL.createObjectURL(qrImage.files[0]);
  console.log(newQrImage);
  qrCode.update({
    image: newQrImage
  });
};

const updateQrColor = () => {
  newQrColor = qrColor.value;
  qrCode.update({
    dotsOptions: {
      color: newQrColor
    }
  });
};

const updateQrType = () => {
  newQrType = qrType.value;
  qrCode.update({
    dotsOptions: {
      type: newQrType
    }
  });
};

const download = () => qrCode.download("jpeg");

qrCode.append(document.getElementById('canvas'));
</script>
<center><button id="formButton" onclick="download();">Download</button></center>
</td>
</div>
</tr>
</table>

@endsection
