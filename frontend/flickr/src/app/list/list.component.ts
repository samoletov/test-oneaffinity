import { Component, OnInit } from '@angular/core';
import { NgxSpinnerService } from 'ngx-spinner';

import { Page } from '../model/page';
import { ImageService } from '../image.service';
import { FormGroup, FormControl, Validators } from '@angular/forms';

@Component({
  selector: 'app-list',
  templateUrl: './list.component.html',
  styleUrls: ['./list.component.scss']
})
export class ListComponent implements OnInit {

  currentPage: number;
  model: {
    tag: string
  };
  page: Page;

  constructor(private imageService: ImageService, private spinner: NgxSpinnerService) { }

  getImages(): void {
    this.spinner.show();
    this.imageService.getImagesPage(this.model.tag, this.currentPage).subscribe(page => {
      this.page = page;
      this.spinner.hide();
    });
  }

  onSubmit(): void {
    this.currentPage = 1;
    this.getImages();
  }

  pageChanged(event): void {
    this.currentPage = event;
    this.getImages();
  }

  ngOnInit() {
    this.model = {
      tag: ''
    };
    this.page = new Page();
  }


}
