// server.js
const express = require('express');
const mongoose = require('mongoose');
const bodyParser = require('body-parser');

const app = express();
const PORT = process.env.PORT || 3000;

// Connect to MongoDB
mongoose.connect('mongodb://localhost/schoolApp', { useNewUrlParser: true, useUnifiedTopology: true });

// Define a simple mongoose model
const University = mongoose.model('University', {
  name: String,
  location: String,
  majors: [String],
});

// Middleware
app.use(bodyParser.json());

// Routes

// Example: Get all universities
app.get('/universities', async (req, res) => {
  try {
    const universities = await University.find();
    res.json(universities);
  } catch (error) {
    res.status(500).json({ error: error.message });
  }
});

// Example: Add a new university
app.post('/universities', async (req, res) => {
  try {
    const newUniversity = new University(req.body);
    const savedUniversity = await newUniversity.save();
    res.json(savedUniversity);
  } catch (error) {
    res.status(500).json({ error: error.message });
  }
});

// Start the server
app.listen(PORT, () => {
  console.log(`Server is running on port ${PORT}`);
});
  
