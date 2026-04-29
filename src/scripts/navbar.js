import React, { useEffect, useState, useRef } from "react"

const navLinks = [
  { label: "Menu", href: "#from-our-cases" },
  { label: "The Sacripantina", href: "#the-sacripantina" },
  { label: "Catering", href: "#catering" },
  { label: "Our Story", href: "#brand-quote" },
]

const socialLinks = [
  {
    label: "Google Business",
    href: "https://share.google/I4zdmCiXB7rkyddnu",
    icon: "google",
  },
  {
    label: "Yelp",
    href: "https://www.yelp.com/biz/stella-pastry-and-cafe-san-francisco",
    icon: "yelp-text",
  },
]

const logoUrl =
  "/wp-content/uploads/2026/04/Stella_Principal_tagline-scaled.png"

function SocialIcon({ type }) {
  if (type === "yelp-text") {
    return <span className="st-yelp-text">YELP</span>
  }

  return (
    <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
      <path
        d="M21.8 12.24c0-.76-.07-1.49-.2-2.18H12v4.12h5.49a4.7 4.7 0 0 1-2.04 3.08v2.67h3.3c1.93-1.85 3.05-4.56 3.05-7.69Z"
        fill="currentColor"
      />
      <path
        d="M12 22c2.76 0 5.07-.95 6.75-2.57l-3.3-2.67c-.91.64-2.08 1.02-3.45 1.02-2.65 0-4.9-1.86-5.7-4.36H2.89v2.76A10.05 10.05 0 0 0 12 22Z"
        fill="currentColor"
        opacity=".86"
      />
      <path
        d="M6.3 13.42a6.25 6.25 0 0 1 0-3.84V6.82H2.89a10.34 10.34 0 0 0 0 9.36l3.41-2.76Z"
        fill="currentColor"
        opacity=".72"
      />
      <path
        d="M12 5.22c1.5 0 2.84.54 3.9 1.58l2.93-3.05C17.06 2.05 14.75 1 12 1a10.05 10.05 0 0 0-9.11 5.82L6.3 9.58c.8-2.5 3.05-4.36 5.7-4.36Z"
        fill="currentColor"
        opacity=".94"
      />
    </svg>
  )
}
function SocialLinks({ className = "" }) {
  return (
    <div className={`st-socials ${className}`} aria-label="Stella social links">
      {socialLinks.map((item) => (
        <a
          key={item.label}
          href={item.href}
          className="st-social-link"
          target="_blank"
          rel="noopener noreferrer"
          aria-label={item.label}
          title={item.label}
        >
          <SocialIcon type={item.icon} />
        </a>
      ))}
    </div>
  )
}

export default function Navbar() {
  const [menuOpen, setMenuOpen] = useState(false)
  const [scrolled, setScrolled] = useState(false)
  const scrollProgressRef = useRef(0)
  const rafRef = useRef(null)

  useEffect(() => {
    const THRESHOLD = 40
    const FADE_RANGE = 60

    const handleScroll = () => {
      const y = window.scrollY
      scrollProgressRef.current = Math.min(
        1,
        Math.max(0, (y - THRESHOLD) / FADE_RANGE)
      )
      setScrolled(y > THRESHOLD)
    }

    handleScroll()
    window.addEventListener("scroll", handleScroll, { passive: true })

    return () => window.removeEventListener("scroll", handleScroll)
  }, [])

  useEffect(() => {
    const handleResize = () => {
      if (window.innerWidth >= 1024) setMenuOpen(false)
    }

    window.addEventListener("resize", handleResize)

    return () => window.removeEventListener("resize", handleResize)
  }, [])

  useEffect(() => {
    const handleAnchorClick = (e) => {
      const trigger = e.target.closest('a[href^="#"]')
      if (!trigger) return

      const targetId = trigger.getAttribute("href")
      if (!targetId || targetId === "#") return

      const targetEl = document.querySelector(targetId)
      if (!targetEl) return

      e.preventDefault()

      const wpAdminBar = document.getElementById("wpadminbar")
      const adminBarHeight = wpAdminBar ? wpAdminBar.offsetHeight : 0
      const navOffset = window.innerWidth >= 1024 ? 104 : 86
      const extraGap = 10

      const top =
        targetEl.getBoundingClientRect().top +
        window.pageYOffset -
        adminBarHeight -
        navOffset -
        extraGap

      window.scrollTo({ top, behavior: "smooth" })
      setMenuOpen(false)
    }

    document.addEventListener("click", handleAnchorClick)

    return () => document.removeEventListener("click", handleAnchorClick)
  }, [])

  useEffect(() => {
    const handleKey = (e) => {
      if (e.key === "Escape" && menuOpen) setMenuOpen(false)
    }

    document.addEventListener("keydown", handleKey)

    return () => document.removeEventListener("keydown", handleKey)
  }, [menuOpen])

  useEffect(() => {
    return () => {
      if (rafRef.current) cancelAnimationFrame(rafRef.current)
    }
  }, [])

  return (
    <>
      <header
        className={`st-site-header fixed left-0 right-0 z-[999] transition-all duration-500 ${
          scrolled ? "is-scrolled" : "is-top"
        }`}
        style={{ top: "var(--wp-admin--admin-bar--height, 0px)" }}
      >
        <div className="st-site-header__inner mx-auto flex max-w-[1440px] items-center justify-between gap-5 px-4 py-3 sm:px-6 lg:px-8">
          <a href="#top" className="st-brand" aria-label="Stella Pastry & Cafe Home">
            <img
              src={logoUrl}
              alt="Stella Pastry & Cafe — The House of Sacripantina"
            />
          </a>

          <div className="st-desktop-main">
            <nav className="st-nav" aria-label="Main navigation">
              <div className="container">
                {navLinks.map((item) => (
                  <a key={item.label} href={item.href} className="btn">
                    {item.label}
                  </a>
                ))}

                <svg
                  className="outline"
                  overflow="visible"
                  width="100%"
                  height="100%"
                  viewBox="0 0 400 60"
                  preserveAspectRatio="none"
                  aria-hidden="true"
                >
                  <rect
                    className="rect"
                    pathLength="100"
                    x="0"
                    y="0"
                    width="400"
                    height="60"
                    rx="2"
                    ry="2"
                  />
                </svg>
              </div>
            </nav>

            <a href="#order-delivery" className="st-nav-order">
              Order Now
            </a>

            <SocialLinks className="st-socials-desktop" />
          </div>

          <div className="st-mobile-actions">
            <SocialLinks className="st-socials-mobile-top" />

            <button
              type="button"
              aria-label={menuOpen ? "Close menu" : "Open menu"}
              aria-expanded={menuOpen}
              onClick={() => setMenuOpen((prev) => !prev)}
              className="st-menu-toggle"
            >
              <span className="relative block h-4 w-5">
                <span
                  className={`absolute left-0 top-0 h-px w-5 bg-current transition-transform duration-300 ease-in-out ${
                    menuOpen ? "translate-y-[7px] rotate-45" : ""
                  }`}
                />
                <span
                  className={`absolute left-0 top-[7px] h-px w-5 bg-current transition-opacity duration-300 ease-in-out ${
                    menuOpen ? "opacity-0" : "opacity-100"
                  }`}
                />
                <span
                  className={`absolute left-0 top-[14px] h-px w-5 bg-current transition-transform duration-300 ease-in-out ${
                    menuOpen ? "-translate-y-[7px] -rotate-45" : ""
                  }`}
                />
              </span>
            </button>
          </div>
        </div>

        <div
          className={`st-mobile-panel ${menuOpen ? "is-open" : ""}`}
          aria-hidden={!menuOpen}
        >
          <nav className="mx-auto max-w-[1440px] px-4 py-4 sm:px-6">
            <div className="grid gap-2">
              {navLinks.map((item) => (
                <a key={item.label} href={item.href} className="st-mobile-link">
                  {item.label}
                </a>
              ))}

              <a href="#order-delivery" className="st-mobile-order">
                Order Now
              </a>

              <div className="st-mobile-social-row">
                <span className="st-mobile-social-label">Find us on</span>
                <SocialLinks className="st-socials-mobile-panel" />
              </div>
            </div>
          </nav>
        </div>

        <div className="navbar-wave" aria-hidden="true" />
      </header>

      <div className="h-[80px] lg:h-[100px]" aria-hidden="true" />
    </>
  )
}