<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Signature Pad demo</title>
  <meta name="description" content="Signature Pad - HTML5 canvas based smooth signature drawing using variable width spline interpolation.">

  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">

  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">

  <link rel="stylesheet" href="{{ asset('css/signature-pad.css') }}">
</head>

<body onselectstart="return false">
  <div id="signature-pad" class="signature-pad">

    <div class="form-group row mb-4 hide-sign">
      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
      <div class="col-sm-12 col-md-7" style="font-size: 12px;">
        <p>The Hotel will not Accept any liability for any valuables left by guest in the room. The hotel has provide safety deposit box with free of charge in each room, The hotel will not be held responsible for any accident or injury to guest. Regardless of the billing instruction, I agree to be held personally liable in the event that the indicated person, company and ( or ) association fails to pay any part or the full amount of charges incurred
          My Signature is authorization for The Udaya Resort and Spa to use the credit card imprinted for payment of this room account
        </p>
      </div>
    </div>
    <div class="signature-pad--body">
      <canvas></canvas>
    </div>
    <div class="signature-pad--footer">
      <div class="description">Sign above</div>

      <div class="signature-pad--actions">
        <div>
          <button type="button" class="button clear" data-action="clear">Clear</button>
          <button type="button" class="button" data-action="change-color">Change color</button>
          <button type="button" class="button" data-action="undo">Undo</button>

        </div>
        <div>
          <button type="button" class="button save" data-action="save-png">Submit</button>
        </div>
      </div>
    </div>
  </div>


  <script src="{{ asset('js/signature_pad.umd.js') }}"></script>
  <script>
    const wrapper = document.getElementById("signature-pad");
    const clearButton = wrapper.querySelector("[data-action=clear]");
    const changeColorButton = wrapper.querySelector("[data-action=change-color]");
    const undoButton = wrapper.querySelector("[data-action=undo]");
    const savePNGButton = wrapper.querySelector("[data-action=save-png]");
    const saveJPGButton = wrapper.querySelector("[data-action=save-jpg]");
    const saveSVGButton = wrapper.querySelector("[data-action=save-svg]");
    const canvas = wrapper.querySelector("canvas");
    const signaturePad = new SignaturePad(canvas, {
      // It's Necessary to use an opaque color when saving image as JPEG;
      // this option can be omitted if only saving as PNG or SVG
      backgroundColor: 'rgb(255, 255, 255)'
    });

    // Adjust canvas coordinate space taking into account pixel ratio,
    // to make it look crisp on mobile devices.
    // This also causes canvas to be cleared.
    function resizeCanvas() {
      // When zoomed out to less than 100%, for some very strange reason,
      // some browsers report devicePixelRatio as less than 1
      // and only part of the canvas is cleared then.
      const ratio = Math.max(window.devicePixelRatio || 1, 1);

      // This part causes the canvas to be cleared
      canvas.width = canvas.offsetWidth * ratio;
      canvas.height = canvas.offsetHeight * ratio;
      canvas.getContext("2d").scale(ratio, ratio);

      // This library does not listen for canvas changes, so after the canvas is automatically
      // cleared by the browser, SignaturePad#isEmpty might still return false, even though the
      // canvas looks empty, because the internal data of this library wasn't cleared. To make sure
      // that the state of this library is consistent with visual state of the canvas, you
      // have to clear it manually.
      signaturePad.clear();
    }

    // On mobile devices it might make more sense to listen to orientation change,
    // rather than window resize events.
    window.onresize = resizeCanvas;
    resizeCanvas();

    function download(dataURL, filename) {
      const blob = dataURLToBlob(dataURL);
      const url = window.URL.createObjectURL(blob);

      const a = document.createElement("a");
      a.style = "display: none";
      a.href = url;
      a.download = filename;

      document.body.appendChild(a);
      a.click();

      window.URL.revokeObjectURL(url);
    }

    // One could simply use Canvas#toBlob method instead, but it's just to show
    // that it can be done using result of SignaturePad#toDataURL.
    function dataURLToBlob(dataURL) {
      // Code taken from https://github.com/ebidel/filer.js
      const parts = dataURL.split(';base64,');
      const contentType = parts[0].split(":")[1];
      const raw = window.atob(parts[1]);
      const rawLength = raw.length;
      const uInt8Array = new Uint8Array(rawLength);

      for (let i = 0; i < rawLength; ++i) {
        uInt8Array[i] = raw.charCodeAt(i);
      }

      return new Blob([uInt8Array], {
        type: contentType
      });
    }

    clearButton.addEventListener("click", () => {
      signaturePad.clear();
    });

    undoButton.addEventListener("click", () => {
      const data = signaturePad.toData();

      if (data) {
        data.pop(); // remove the last dot or line
        signaturePad.fromData(data);
      }
    });

    changeColorButton.addEventListener("click", () => {
      const r = Math.round(Math.random() * 255);
      const g = Math.round(Math.random() * 255);
      const b = Math.round(Math.random() * 255);
      const color = "rgb(" + r + "," + g + "," + b + ")";

      signaturePad.penColor = color;
    });

    savePNGButton.addEventListener("click", () => {
      if (signaturePad.isEmpty()) {
        alert("Please provide a signature first.");
      } else {
        const dataURL = signaturePad.toDataURL();
        // $.session.set("signData", dataURL);
        sessionStorage.signature = dataURL;
        history.back();
      }
    });

    saveJPGButton.addEventListener("click", () => {
      if (signaturePad.isEmpty()) {
        alert("Please provide a signature first.");
      } else {
        const dataURL = signaturePad.toDataURL("image/jpeg");
        download(dataURL, "signature.jpg");
      }
    });

    saveSVGButton.addEventListener("click", () => {
      if (signaturePad.isEmpty()) {
        alert("Please provide a signature first.");
      } else {
        const dataURL = signaturePad.toDataURL('image/svg+xml');
        download(dataURL, "signature.svg");
      }
    });
  </script>

</body>

</html>