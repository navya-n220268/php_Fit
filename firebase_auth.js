  import { initializeApp } from "https://www.gstatic.com/firebasejs/12.9.0/firebase-app.js";
  import { getAuth, GoogleAuthProvider, signInWithPopup } 
  from "https://www.gstatic.com/firebasejs/12.9.0/firebase-auth.js";

  const firebaseConfig = {
    apiKey: "AIzaSyAukN6qwis8Z3Xn_GMeppmuLqtFSeJOFQ4",
    authDomain: "fitculture-78328.firebaseapp.com",
    projectId: "fitculture-78328",
    storageBucket: "fitculture-78328.firebasestorage.app",
    messagingSenderId: "164707701843",
    appId: "1:164707701843:web:3dd6a1479cdb85ee03a2a6"
  };

  const app = initializeApp(firebaseConfig);
  const auth = getAuth(app);
  const provider = new GoogleAuthProvider();

  window.firebaseLogin = function () {
    signInWithPopup(auth, provider)
      .then((result) => {
        const user = result.user;
        console.log(user);
        let name;
        if(user.displayName && user.displayName.trim() !== "") {
          name = user.displayName;
        } else if(user.email) {
          name = user.email.split("@")[0];
        } else {
          name = "User";
        }


        alert("Welcome " + name);
        window.location.href = "dashboard.php";
      })
      .catch((error) => {
        console.error("FIREBASE ERROR:", error);
        console.error(error);
      });
  };
