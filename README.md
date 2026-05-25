# Laravel Courses API CALL

A simple RESTful API built with Laravel for managing courses.  
This project demonstrates CRUD operations using Laravel Controllers, Models, Migrations, and API Routes.

---

## Features

- Create a course
- Retrieve all courses
- Retrieve a single course
- Update a course
- Partially update a course
- Delete a course
- Delete all courses

---

## Technologies Used

- PHP
- Laravel
- MySQL / SQLite
- REST API
- Postman

---

## API Endpoints

| Method | Endpoint | Description |
|---|---|---|
| GET | `/api/courses` | Get all courses |
| POST | `/api/courses` | Create a new course |
| GET | `/api/courses/{id}` | Get a single course |
| PUT | `/api/courses/{id}` | Update a course |
| PATCH | `/api/courses/{id}` | Partially update a course |
| DELETE | `/api/courses/{id}` | Delete a course |
| DELETE | `/api/courses` | Delete all courses |

---

## Sample JSON Request

### Create Course

```json
{
    "title": "Web Development",
    "description": "Designing a UI/UX",
    "instructor": "Carl"
}
```

---

## Video Presentation

Watch the video presentation here:

[Video Presentation](https://drive.google.com/file/d/1J9t6eyvHUNLhU-VqHAKOGaET_5SE8qTR/view?usp=drivesdk)

---

## Author

Developed by Justine Barlaan