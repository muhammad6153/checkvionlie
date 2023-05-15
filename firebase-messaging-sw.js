//importScripts("https://www.gstatic.com/firebasejs/7.16.1/firebase-app.js");
//importScripts(
//    "https://www.gstatic.com/firebasejs/7.16.1/firebase-messaging.js",
//);
//// For an optimal experience using Cloud Messaging, also add the Firebase SDK for Analytics.
////importScripts(
////    "https://www.gstatic.com/firebasejs/7.16.1/firebase-analytics.js",
////);
//
//// Initialize the Firebase app in the service worker by passing in the
//// messagingSenderId.
//firebase.initializeApp({
//    messagingSenderId: "320962620415",
//    apiKey: "AIzaSyBRajO5_R1HdMrTcfwNKDhBWNuAfq6VdWs",
//    projectId: "near-future-app",
//    appId: "1:320962620415:web:12262bf361429ae60795ca",
////    storageBucket: "near-future-app.appspot.com",
////    databaseURL: "near-future-app.firebaseapp.com",
//});
//
//// Retrieve an instance of Firebase Messaging so that it can handle background
//// messages.
//const messaging = firebase.messaging();
//
//messaging.setBackgroundMessageHandler(function(payload) {
//    console.log(
//        "[firebase-messaging-sw.js] Received background message ",
//        payload,
//    );
//    // Customize notification here
//    const notificationTitle = "Background Message Title";
//    const notificationOptions = {
//        body: "Background Message body.",
//        icon: "/itwonders-web-logo.png",
//    };
//
//    return self.registration.showNotification(
//        notificationTitle,
//        notificationOptions,
//    );
//});
importScripts('https://www.gstatic.com/firebasejs/3.9.0/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/3.9.0/firebase-messaging.js');

// Initialize the Firebase app in the service worker by passing in the
// messagingSenderId.
firebase.initializeApp({
   'messagingSenderId': '1014696941884'
});

// Retrieve an instance of Firebase Messaging so that it can handle background
// messages.
const messaging = firebase.messaging();

messaging.setBackgroundMessageHandler(function(payload) {
  console.log('[firebase-messaging-sw.js] Received background message ', payload);
  // Customize notification here
  const notificationTitle = 'Background Message Title';
  const notificationOptions = {
    body: 'Background Message body.',
    icon: 'https://images.theconversation.com/files/93616/original/image-20150902-6700-t2axrz.jpg' //your logo here
  };

  return self.registration.showNotification(notificationTitle,
      notificationOptions);
});