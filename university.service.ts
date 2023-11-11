// university.service.ts
import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root',
})
export class UniversityService {
  private apiUrl = 'http://localhost:3000'; // Adjust the URL based on your server configuration

  constructor(private http: HttpClient) {}

  // Example: Get all universities
  getAllUniversities(): Observable<any[]> {
    return this.http.get<any[]>(`${this.apiUrl}/universities`);
  }

  // Example: Add a new university
  addUniversity(university: any): Observable<any> {
    return this.http.post<any>(`${this.apiUrl}/universities`, university);
  }
}
