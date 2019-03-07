**Available API endpoints**
----

**Show User Total Video Size**
----
  Returns json data about a single user's total video size.

* **URL**

  /userVideoSize/:userId

* **Method:**

  `GET`
  
*  **URL Params**

   **Required:**
 
   `userId=[string]`

* **Data Params**

  None

* **Success Response:**

  * **Code:** 200 <br />
    **Content:** `{"status":true,"total_video_size":200}`
 
* **Error Response:**

  * **Code:** 404 NOT FOUND <br />
    **Content:** `{"status":"false","message":"No videos found for this user"}`

  OR

  * **Code:** 400 UNAUTHORIZED <br />
    **Content:** `{"status":"false","message":"Invalid request"}`




**Show Video Metadata**
----
  Returns json data about a single video.

* **URL**

  /video/:videoId

* **Method:**

  `GET`
  
*  **URL Params**

   **Required:**
 
   `videoId=[string]`

* **Data Params**

  None

* **Success Response:**

  * **Code:** 200 <br />
    **Content:** `{"status":true,"result":{"video_size":300,"viewers_count":3000,"created_by":"User2"}}`
 
* **Error Response:**

  * **Code:** 404 NOT FOUND <br />
    **Content:** `{"status":"false","message":"Video does not exists."}`

  OR

  * **Code:** 400 UNAUTHORIZED <br />
    **Content:** `{"status":"false","message":"Invalid request"}`


**Update Video Metadata**
----
  Updates the video metadata and returns json of updated data.

* **URL**

  /video/:videoId

* **Method:**

  `PATCH`
  
*  **URL Params**

   **Required:**
 
   `videoId=[string]`

* **Data Params**

    `video_size=[integer]`
    `viewers_count=[integer]`

* **Success Response:**

  * **Code:** 200 <br />
    **Content:** `{"id":"Video2","user_id":"User1","video_size":"80","viewers_count":"2000","created_at":"2019-03-07 15:40:49","updated_at":"2019-03-07 17:16:02"}`
 
* **Error Response:**

  * **Code:** 400 UNAUTHORIZED <br />
    **Content:** `{"status":"false","message":"Invalid request"}`
