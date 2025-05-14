function searchJobs() {
    const jobTitle = document.getElementById('job-title').value;
    const location = document.getElementById('location').value;

    if (jobTitle || location) {
        alert(`Searching for jobs with title: ${jobTitle} and location: ${location}`);
    } else {
        alert('Please enter a job title or location.');
    }
}
