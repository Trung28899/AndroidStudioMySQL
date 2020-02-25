NOTABLE THINGS

0. PHP Scripts: 
- Look in this folder: Android-PHP
- Simplified Coding Series

1. Using volley: 
- Search: volley jcenter (on google)
- Go to: https://bintray.com/android/android-utils/com.android.volley.volley/view
- Under: Maven build settings > hit "Gradle", copy the the implementation and 
put it in build.gradel Module level under dependencies
- Then sync your project

- We use volley to send network request, because this is easier than
HttpRequest, etc...

2. Internet permission: 
- Remember to add uses permission for internet
- If found error: "java.io.IOException: cleartext HTTP traffic to 
(ip address) not permitted" > just add
android:usesCleartextTraffic = "true"
under app/manifests/AndroidManifest.xml

3. Progress: 
Right now only register user activity is working with 
hosting in hostinger.com with domain: trevortrinh.com
